<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index(){
        return view('products.index',[
            'products'=> Product::latest()->filter(request(['tag','search']))->paginate(6),
        ]);
    }

    public function categorize(Category $category){
        return view('products.index',[
            'products'=> Product::latest()->filter([$category->id])->paginate(4),
        ]);
    }
    public function show(Product $product){
        return view('products.show', [
            'product'=>$product,
            'category' => Category::find($product->category_id)
        ]);
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        $formFields=$request->validate([
            'name'=>['required', Rule::unique('products', 'name')],'category_id'=>['required','exists:categories,id'],
            'quantity'=>['required', 'numeric', 'min:1'],
            'price'=>['required', 'numeric', 'min:0.01'],
            'tags'=>'required',
            'description'=>'required',
            'pic'=>'nullable'
            
        ]);
        if($request->hasFile('pic')){
            $formFields['pic']=$request->file('pic')->store('pics', 'public');
        }
        $formFields['user_id']=auth()->id();
        Product::create($formFields);
        return redirect('/products/manage')->with('message', 'Newproduct created successfully!');
    }
    public function edit(Product $product){
        return view('products.edit', ['prod'=>$product]);
    }
    public function update(Request $request, Product $product){
        $formFields = $request->validate([   
            'name'=>'required',
            'category_id'=>'required',
            'quantity'=>['required', 'numeric', 'min:1'],
            'price'=>['required', 'numeric', 'min:0.01'],
            'tags'=>'required',
            'description'=>'required',

        ]);
        if($request->hasFile('pic')){
            $formFields['pic']=$request->file('pic')->store('pics', 'public');
        };
        $product->update($formFields);
        return redirect('products/manage')->with('message', 'Product updated successfully');
    }
    public function destroy(Product $product){
        $product->delete();
        return redirect('/products/manage')->with('message', 'Product was deleted');
    }
    public function manage(){
        return view('products.manage',['products'=>auth()->user()->products()->get()]);
    }
    public function addcart(Product $product){
        $id=$product->id;
        $cart=Session::get('cart',[]);
        $total = Session::get('total', 0);
        if(empty($cart[$id])){ 
        $cart[$product->id]=[
            'quantity'=>1,
            'product'=>$product
        ];
    }else{
        $cart[$product->id]=[
            'quantity'=>$cart[$product->id]['quantity']+1,
            'product'=>$product
        ];
    }
        $total += $product->price;
    Session::put('cart', $cart);
    Session::put('total',$total); 
        return redirect()->back()->with('message', 'Item added to cart.');
    }
    public function cart(){
        //   session()->forget('total');
        //   session()->forget('cart');
        $cart=Session::get('cart');
        $total=Session::get('total');
        return view('products.cart',['cart'=>$cart, 'total'=>$total]);
    }
    public function deletecart(Product $product){
        $id=$product->id;
        $cart=Session::get('cart');
        $total=Session::get('total'); 
        $total-=$cart[$id]['product']->price;
        if($cart[$id]['quantity']>1){
            $cart[$id]['quantity']-=1;
        }else{
            unset($cart[$id]);
        };        
        Session::put('cart', $cart);
        Session::put('total',$total);
        return view('products.cart',['cart'=>$cart, 'total'=>$total]);
    }
}
