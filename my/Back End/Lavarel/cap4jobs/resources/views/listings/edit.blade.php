<x-layout>
    <x-carddd class='bg-laravel p-10 max-w-lg mx-auto mt-24'>    
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1 text-white">
                Edit a job
            </h2>
            <p class="mb-4 text-white">Edit : {{$listing->title}}</p>
        </header>
    {{-- GET and POST won'T cut it anymore since we want to update the listing --}}
    {{-- instead well use one of the two HTTP methods to update data --}}
    {{-- PUT - override all previous data with new one --}}
    {{-- PATCH - override just the fields that changed --}}
        <form action="/listings/{{$listing->id}}" method='post' enctype='multipart/form-data'>
            {{-- by default method='' is GET, and actually can have only GET or POST --}}
            {{-- this directive will be in all laravel forms --}}
            {{-- it prevents cross site scripting attack --}}
            {{-- basically people stealing our form and messing with it --}}
            @csrf 
            @method('PUT')
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2 text-white">Company Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company" value='{{$listing->company}}'/>
                @error('company')
                    <p class='text-red-500 text-xs mt-1'>{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2 text-white">Job Title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                    placeholder="Example: Senior Laravel Developer" value='{{$listing->title}}' />
                @error('title')
                    <p class='text-red-500 text-xs mt-1'>{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2 text-white">Job Location</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                    placeholder="Example: Remote, Boston MA, etc" value='{{$listing->location}}'/>
                @error('location')
                    <p class='text-red-500 text-xs mt-1'>{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2 text-white">Contact Email</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" value='{{$listing->email}}'/>
                @error('email')
                    <p class='text-red-500 text-xs mt-1'>{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2 text-white">
                    Website/Application URL
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website" value='{{$listing->website}}'/>
                @error('website')
                    <p class='text-red-500 text-xs mt-1'>{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2 text-white">
                    Tags (Comma Separated)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                    placeholder="Example: Laravel, Backend, Postgres, etc" value='{{$listing->tags}}'/>
                @error('tags')
                    <p class='text-red-500 text-xs mt-1'>{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2 text-white">
                    Company Logo
                </label>
                <img class='w-48 mr-6 mb-6' src="{{$listing->logo ? asset('storage/'.$listing->logo) : asset('images/no-image.png')}}" alt="">
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
                @error('logo')
                <p class='text-red-500 text-xs mt-1'>{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb- text-white">
                    Job Description
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                    placeholder="Include tasks, requirements, salary, etc">{{$listing->description}}</textarea>
                @error('description')
                    <p class='text-red-500 text-xs mt-1'>{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-6">
                <button class="bg-white text-laravel rounded py-2 px-4 hover:bg-black">
                    Change
                </button>
    
                <a href="listings/{{$listing->id}}" class="text-black ml-4"> Back </a>
            </div>
        </form>
    
    </x-carddd>
</x-layout>