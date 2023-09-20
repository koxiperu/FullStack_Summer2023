<x-layout>
    <div class='incol just-c'>
    <header>
        <h2>
            Edit a product
        </h2>
        <p class="">Edit : {{$prod->name}}</p>
    </header>
    <form action="/products/{{$prod->id}}" method='post' enctype='multipart/form-data'>
        @csrf
        @method('PUT')
        <div>
            <div class="inline just-sp">
                <label for="name" class="w-50">Product Name</label>
                <input type="text" class="bd-dark w-50" name="name" value='{{$prod->name}}'/>
                @error('name')
                    <p class=''>{{$message}}</p>
                @enderror
            </div>
            <div class="inline just-sp">
                <label for="category_id" class='w-50'>Choose category</label>
                <select name="category_id" class="bd-dark w-50">
                    <option value="1" {{ $prod->category_id == 1 ? 'selected' : '' }}>Tops</option>
                    <option value="2" {{ $prod->category_id == 2 ? 'selected' : '' }}>Jeans</option>
                    <option value="3" {{ $prod->category_id == 3 ? 'selected' : '' }}>Shoes</option>
                    <option value="4" {{ $prod->category_id == 4 ? 'selected' : '' }}>Accessiores</option>
                </select>
                @error('category_id')
                    <p class=''>{{$message}}</p>
                @enderror
            </div>    
            <div class="inline just-sp">
                <label for="quantity" class="w-50">Quantity</label>
                <input type="number" step='1' class="bd-dark w-50" name="quantity"
                    placeholder="" value='{{$prod->quantity}}' />
                @error('quantity')
                    <p class=''>{{$message}}</p>
                @enderror
            </div>
    
            <div class="inline just-sp">
                <label for="price" class="w-50">Price</label>
                <input type="number"  step='0.01' class="bd-dark w-50" name="price" value='{{$prod->price}}'/>
                @error('price')
                    <p class=''>{{$message}}</p>
                @enderror
            </div>
    
            <div class="inline just-sp">
                <label for="tags" class="w-50">
                    Tags (space Separated)
                </label>
                <input type="text" class="bd-dark w-50" name="tags" value='{{$prod->tags}}'/>
                @error('tags')
                    <p class=''>{{$message}}</p>
                @enderror
            </div>
    
            <div class="inline just-sp">
                <div class='incol just-c'>
                <label for="pic" class="w-50">
                    Product picture
                </label>
                <img class='' src="{{$prod->pic ? asset('storage/'.$prod->pic) : asset('images/accessoires1.jpg')}}" alt="">
            </div>
                <input type="file" class="bd-dark w-50" name="pic" />
                @error('pic')
                <p class=''>{{$message}}</p>
                @enderror
            </div>
    
            <div class="inline just-sp">
                <label for="description" class="w-50">
                    Product Description
                </label>
                <textarea class="bd-dark w-50" name="description" rows="10"
                    placeholder="">{{$prod->description}}</textarea>
                @error('description')
                    <p class=''>{{$message}}</p>
                @enderror
            </div>
    
            <div class="inline just-c">
                <button class="but-dark">
                    Change
                </button>
    
                <a href="/products/{{$prod->id}}" class="but-light bg-v non-link"> Back </a>
            </div>
        </div>

    </form>
</div>
</x-layout>