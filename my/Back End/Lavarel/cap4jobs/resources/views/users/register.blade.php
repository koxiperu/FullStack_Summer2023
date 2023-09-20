<x-layout>
    <x-carddd class="p-10 rounded max-w-lg bg-laravel mx-auto mt-24">    
        <header class="text-center text-white">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Register new user
            </h2>
            <p class="mb-4">Create an account</p>
        </header>
    
        <form action="/users" method='POST' enctype='multipart/form-data'>
            @csrf  {{--dont forget--}}
            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2 text-white">
                    Name
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" value="{{old('name')}}"/>
                @error('name')
                <p class='text-red-500 text-xs mt-1'>{{$message}}</p>
                @enderror
            </div>
    
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
                <label for="password2" class="inline-block text-lg mb-2 text-white">
                    Confirm Password
                </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation" />
                @error('password_confirmation')
                <p class='text-red-500 text-xs mt-1'>{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-6">
                <button class="bg-white text-laravel rounded py-2 px-4 hover:bg-black">
                    Sign Up
                </button>
            </div>
    
            <div class="mt-8">
                <p>
                    Already have an account?
                    <a href="/login" class="text-laravel">Login</a>
                </p>
            </div>
        </form>
    </x-carddd>
</x-layout>