<x-layout>
    <x-carddd class="p-10 rounded max-w-lg bg-laravel mx-auto mt-24">    
        <header class="text-center text-white">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Login
            </h2>
            <p class="mb-4">To enter, input your email and password</p>
        </header>
    
        <form action="/users/authenticate" method='POST' enctype='multipart/form-data'>
            @csrf  {{--dont forget--}}
            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2 text-white">Email</label>
                <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}"/>
                @error('email')
                <p class='text-red-500 text-xs mt-1'>{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-6">
                <label for="password" class="inline-block text-lg mb-2 text-white">
                    Password
                </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" value="{{old('password')}}" />
                @error('password')
                <p class='text-red-500 text-xs mt-1'>{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <button class="bg-white text-laravel rounded py-2 px-4 hover:bg-black">
                    Log in
                </button>
            </div>
    
            <div class="mt-8">
                <p>
                    Don't have an account?
                    <a href="/register" class="bg-white text-laravel rounded py-2 px-4 hover:bg-black">Register</a>
                </p>
            </div>
        </form>
    </x-carddd>
</x-layout>