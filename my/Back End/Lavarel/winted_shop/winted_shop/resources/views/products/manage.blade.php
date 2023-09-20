<x-layout>
    <div class=''>   
        <header>
            <h1>
                Manage my Products
            </h1>
        </header>    
        <div class='incol just-c'>
                @unless($products->isEmpty())
                    @foreach($products as $product)
                        <div class='inline just-sp'>
                                <img class='' src="{{$product->pic ? asset('storage/'.$product->pic) : asset('images/accessoires1.jpg.png')}}" alt="">
                            
                            
                                <a href="/products/{{$product->id}}" class='t-b t-v'>
                                    {{$product->name}}
                                </a>
                            
                           
                                <a href="/products/{{$product->id}}/edit" class='but-light'>
                                    <i class='fa-solid fa-pencil'></i>Edit
                                </a>
                            
                            
                                <form method='post' action="/products/{{$product->id}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class='but-dark bg-v'>
                                        <i class='fa-solid fa-trash'></i>Delete
                                    </button>
                                </form>
                            
                            </div>
                    @endforeach
                    @else
                    
                            <p class='text-center'>No listing found</p>
                            </div>
                        
                @endunless                
        </div>    
    </div>
</x-layout>