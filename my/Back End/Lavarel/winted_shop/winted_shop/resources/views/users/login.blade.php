<x-layout>
    <div class="incol just-c">    
        <header class="">
            <h2>
                Login
            </h2>
            <p class="">To enter, input your email and password</p>
        </header>
    
        <form action="/users/authorise" method='POST' enctype='multipart/form-data' class=''>
            @csrf
            <div class="inline just-sp">
                <label for="email" class="w-50">Email</label>
                <input type="email" class="bd-dark w-50" name="email" value="{{old('email')}}"/>
                @error('email')
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
            <div class="">
                <button class="but-dark dark-sh">
                    Log in
                </button>
            </div>
    
            <div class="">
                <p>
                    Don't have an account?
                    <a href="/register" class="but-light non-link dark-sh">Register</a>
                </p>
            </div>
        </form>
    </div>
</x-layout>