<x-layout>
    <div class="incol just-c">    
        <header class="">
            <h2 class="">
                Edit user's data
            </h2>
            <p class="">Change your data and save them</p>
        </header>
    
        <form action="/users/{{$user->id}}" method='POST' enctype='multipart/form-data'>
            @csrf
            @method('PUT')
            <div class="inline just-sp">
                <label for="firstName" class="w-50">
                    First Name
                </label>
                <input type="text" class="bd-dark w-50" name="firstName" value="{{$user->firstName}}"/>
                @error('firstName')
                <p class=''>{{$message}}</p>
                @enderror
            </div>
            <div class="inline just-sp">
                <label for="lastName" class="w-50">
                    Last Name
                </label>
                <input type="text" class="bd-dark w-50" name="lastName" value="{{$user->lastName}}"/>
                @error('lastName')
                <p class=''>{{$message}}</p>
                @enderror
            </div>
    
            <div class="inline just-sp">
                <label for="email" class="w-50">Email</label>
                <input type="email" class="bd-dark w-50" name="email" value="{{$user->email}}"/>
                @error('email')
                <p class=''>{{$message}}</p>
                @enderror
            </div>

            <div class="inline just-sp">
                <label for="adress" class="w-50">Postal adress</label>
                <input type='text' class="bd-dark w-50" name="adress" value="{{$user->adress}}"/>
                @error('adress')
                <p class=''>{{$message}}</p>
                @enderror
            </div>
            <div class="inline just-sp">
                <label for="zip" class="w-50">Zip code</label>
                <input type="text" class="bd-dark w-50" name="zip" value="{{$user->zip}}"/>
                @error('zip')
                <p class=''>{{$message}}</p>
                @enderror
            </div>

            <div class="inline just-sp">
                <label for="city" class="w-50">City</label>
                <input type="text" class="bd-dark w-50" name="city" value="{{$user->city}}"/>
                @error('city')
                <p class=''>{{$message}}</p>
                @enderror
            </div>

            <div class="inline just-sp">
                <label for="bdate" class="w-50">Birth date</label>
                <input type="date" class="bd-dark w-50" name="bdate" value="{{$user->bdate}}"/>
                @error('bdate')
                <p class=''>{{$message}}</p>
                @enderror
            </div>
            
            <div class="inline just-sp">
                <label for="phone" class="w-50">Phone number</label>
                <input type="text" class="bd-dark w-50" name="phone" value="{{$user->phone}}"/>
                @error('phone')
                <p class=''>{{$message}}</p>
                @enderror
            </div>

            <div class="inline just-sp">
                <label for="photo" class="w-50">
                    Photo (optional)
                </label>
                <img class='prod-img' src="{{$user->photo ? asset('storage/'.$user->photo) : asset('photos/rm7jiqXg2lLmwFBcMsM0DYxhAg5hcvggKB6r1k8C.png')}}" alt="">
                <input type="file" class="bd-dark w-50" name="photo" />
                @error('photo')
                <p class=''>{{$message}}</p>
                @enderror
            </div>
    
            <div class="inline just-sp">
                <label for="password" class="w-50">
                    Password
                </label>
                <input type="password" class="bd-dark w-50" name="password" value="" />
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
    
            <div class="inline just-c">
                <button class="dark-sh but-dark">
                    Change my data
                </button>
                <a href="/" class="but-light bg-v non-link"> Back </a>
            </div>
        </form>
    </div>
</x-layout>