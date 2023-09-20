<x-layout>
    @if(Str::contains(request()->url(),'products'))
    <a href="/" class="but-v dark-sh non-link"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    @endif
    <div class='inline just-c'>
    @auth
        @if((auth()->user()->id)==($product->user_id))
            
                    <a href="/products/{{$product->id}}/edit" class='but-light non-link'>
                        <i class='fa-solid fa-pencil'></i>Edit
                    </a>
                
        
                    <form method='post' action="/products/{{$product->id}}">
                        @csrf
                        @method('DELETE')
                        <button class='but-v'>
                            <i class='fa-solid fa-trash'></i>Delete
                        </button>
                    </form>
                                
        @else
            <p>You can't manage this item. Sorry.</p>
        @endif
    @endauth
</div>
    <div class="inline just-c">
        <div class="">
            <img class="prod-img" src="{{$product->pic ? asset('storage/'.$product->pic) : asset('images/accessoires1.jpg')}}" alt="" />
            
            <h4><em>{{$category->name}}</em></h4>
            <div class="">
                Price: {{$product->price}} $$
            </div>
            
            <div class="">
                <p>Qty: {{$product->quantity}} Stuck</p>
            </div>
        </div>
            <div>
                <h1 class="text-2xl mb-2">{{$product->name}}</h1>
                <h3 class="">Product Description</h3>
                <div class="">
                    <p>{{$product->description}}</p>
                </div>
                <x-prod-tags :tagsCsv="$product->tags"/>
            </div>
        
    </div>
</x-layout>