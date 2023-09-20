<x-layout>
    <div class=''> 
        @if(!empty($cart)){  
        <header class='incol just-c'>
            <h1>
                My cart
            </h1>
            <h3>Total: {{$total}} $$</h3>
        </header>    
        <div class='incol just-c'>
                @foreach($cart as $cartItem)
                <div class='inline just-sp'>
                    <img class='prod-img' src="{{$cartItem['product']->pic ? asset('storage/'.$cartItem['product']->pic) : asset('images/accessoires1.jpg')}}" alt="">
                    <a href="/products/{{$cartItem['product']->id}}" class='t-b t-v'>
                                    {{$cartItem['product']->name}}
                                </a>
                    
                    <h2>Qty: {{ $cartItem['quantity'] }}</h2>
                    <h2> {{$cartItem['product']->price}} $$</h2>
                    <form method='post' action="/cart/{{$cartItem['product']->id}}">
                        @csrf
                        @method('DELETE')
                        <button class='but-dark bg-v'>
                            <i class='fa-solid fa-trash'></i>Delete
                        </button>
                    </form>
                </div>
                @endforeach               
        </div>
    }@else{
        <header>
            <h1>
                My cart is empty
            </h1>
        </header>
    }
    @endif    
    </div>
</x-layout>