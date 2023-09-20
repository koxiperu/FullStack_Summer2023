<x-layout> 
    <div class='incol just-c'>   
        <header class="">
            <h1 class="">
                Create a product
            </h1>
            <p class="">Fill the form to add new product</p>
        </header>
    
        <form action="/products" method='post' enctype='multipart/form-data'>
            @csrf 
            <div class="inline just-sp">
                <label for="name" class="w-50">Product Name</label>
                <input type="text" class="bd-dark w-50" name="name" value='{{old('name')}}'/>
                @error('name')
                    <p class=''>{{$message}}</p>
                @enderror
            </div>
            <div class="inline just-sp">
                <label class='w-50' for="category_id">Choose category</label>
                <select name="category_id" class="bd-dark w-50">
                    <option value="1">Tops</option>
                    <option value="2">Jeans</option>
                    <option value="3">Shoes</option>
                    <option value="4">Accessiores</option>
                </select>
                @error('category_id')
                    <p class=''>{{$message}}</p>
                @enderror
            </div>    
            <div class="inline just-sp">
                <label for="quantity" class="w-50">Quantity</label>
                <input type="number" class="bd-dark w-50" name="quantity"
                    placeholder="" value='{{old('quantity')}}' />
                @error('quantity')
                    <p class=''>{{$message}}</p>
                @enderror
            </div>
    
            <div class="inline just-sp">
                <label for="price" class="w-50">Price</label>
                <input type="text" class="bd-dark w-50" name="price" step='0.01'
                    placeholder="" value='{{old('price')}}'/>
                @error('price')
                    <p class=''>{{$message}}</p>
                @enderror
            </div>
    
            <div class="inline just-sp">
                <label for="tags" class="w-50">
                    Tags (space Separated)
                </label>
                <input type="text" class="bd-dark w-50" name="tags"
                    placeholder="" value='{{old('tags')}}'/>
                @error('tags')
                    <p class=''>{{$message}}</p>
                @enderror
            </div>
    
            <div class="inline just-sp">
                <label for="pic" class="w-50">
                    Product picture
                </label>
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
                    placeholder="">{{old('description')}}</textarea>
                @error('description')
                    <p class=''>{{$message}}</p>
                @enderror
            </div>
    
            <div class="">
                <button class="but-dark">
                    Create product
                </button>
    
                <a href="/" class="but-v non-link"> Back </a>
            </div>
        </form>
    </div>
</x-layout>