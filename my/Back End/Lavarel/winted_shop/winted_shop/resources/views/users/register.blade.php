<x-layout>
    <div class="incol just-c">    
        <header class="">
            <h2 class="">
                Register new user
            </h2>
            <p class="">Create an account</p>
        </header>
    
        <form action="/users" method='POST' enctype='multipart/form-data'>
            @csrf  {{--dont forget--}}
            <div class="inline just-sp">
                <label for="firstName" class="w-50">
                    First Name
                </label>
                <input type="text" class="bd-dark w-50" name="firstName" value="{{old('firstName')}}"/>
                @error('firstName')
                <p class=''>{{$message}}</p>
                @enderror
            </div>
            <div class="inline just-sp">
                <label for="lastName" class="w-50">
                    Last Name
                </label>
                <input type="text" class="bd-dark w-50" name="lastName" value="{{old('lastName')}}"/>
                @error('lastName')
                <p class=''>{{$message}}</p>
                @enderror
            </div>
    
            <div class="inline just-sp">
                <label for="email" class="w-50">Email</label>
                <input type="email" class="bd-dark w-50" name="email" value="{{old('email')}}"/>
                @error('email')
                <p class=''>{{$message}}</p>
                @enderror
            </div>

            <div class="inline just-sp">
                <label for="adress" class="w-50">Postal adress</label>
                <input type='text' class="bd-dark w-50" name="adress" value="{{old('adress')}}"/>
                @error('adress')
                <p class=''>{{$message}}</p>
                @enderror
            </div>
            <div class="inline just-sp">
                <label for="zip" class="w-50">Zip code</label>
                <input type="text" class="bd-dark w-50" name="zip" value="{{old('zip')}}"/>
                @error('zip')
                <p class=''>{{$message}}</p>
                @enderror
            </div>

            <div class="inline just-sp">
                <label for="city" class="w-50">City</label>
                <input type="text" class="bd-dark w-50" name="city" value="{{old('city')}}"/>
                @error('city')
                <p class=''>{{$message}}</p>
                @enderror
            </div>

            <div class="inline just-sp">
                <label for="bdate" class="w-50">Birth date</label>
                <input type="date" class="bd-dark w-50" name="bdate" value="{{old('bdate')}}"/>
                @error('bdate')
                <p class=''>{{$message}}</p>
                @enderror
            </div>
            
            <div class="inline just-sp">
                <label for="phone" class="w-50">Phone number</label>
                <input type="text" class="bd-dark w-50" name="phone" value="{{old('phone')}}"/>
                @error('phone')
                <p class=''>{{$message}}</p>
                @enderror
            </div>

            <div class="inline just-sp">
                <label for="photo" class="w-50">
                    Photo (optional)
                </label>
                <input type="file" class="bd-dark w-50" name="photo" />
                @error('photo')
                <p class=''>{{$message}}</p>
                @enderror
            </div>
    
            <div class="inline just-sp">
                <label for="password" class="w-50">
                    Password
                </label>
                <input type="password" class="bd-dark w-50" name="password" value="{{old('password')}}" />
                @error('password')
                <p class=''>{{$message}}</p>
                @enderror
            </div>
    
            <div class="inline just-sp">
                <label for="password2" class="w-50">
                    Confirm Password
                </label>
                <input type="password" class="bd-dark w-50" name="password_confirmation" />
                @error('password_confirmation')
                <p class=''>{{$message}}</p>
                @enderror
            </div>
    
            <div class="">
                <button class="dark-sh but-dark">
                    Sign Up
                </button>
            </div>
    
            <div class="inline just-c">
                <p>
                    Already have an account?
                    <a href="/login" class="but-light non-link light-sh">Login</a>
                </p>
            </div>
        </form>
    </div>
</x-layout>