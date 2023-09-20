<x-layout>
    

    @if((request()->has('tag')) || (Str::contains(request()->url(),'categories')))
        <a href="/" class="but-v dark-sh non-link"><i class="fa-solid fa-arrow-left"></i> Back
        </a>
    @endif   
    @if (count($products)==0)
        <h3>No products found</h3>
    @endif
   <div class='inline ff'>     
    @foreach($products as $product)
        <x-product-card :prodpart="$product"/>              
        @endforeach
    </div>
    <div>
        {{$products->links()}}
    </div>
</x-layout>