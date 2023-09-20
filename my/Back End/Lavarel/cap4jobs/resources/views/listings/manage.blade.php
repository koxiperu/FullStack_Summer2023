<x-layout>
    <x-carddd class='p-10'>   
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Manage Jobs
            </h1>
        </header>
    
        <table class="w-full table-auto rounded-sm">
            <tbody>
                {{-- @unless display the code if the condition is false 
                    conpared to @if that shows the content if the condition is true--}}
                @unless($listings->isEmpty())
                    @foreach($listings as $listing)
                        <tr class="border-gray-300">
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <a href="/listings/{{$listing->id}}">
                                    {{$listing->title}}
                                </a>
                            </td>
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <a href="/listings/{{$listing->id}}/edit" class='bg-laravel p-3 rounded-xl text-white'>
                                    <i class='fa-solid fa-pencil'></i>Edit
                                </a>
                            </td>
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <form method='post' action="/listings/{{$listing->id}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class='text-red-500 bg-black p-3 rounded-xl'>
                                        <i class='fa-solid fa-trash'></i>Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @else
                    <tr class='border-grey-300 bg-laravel text-white'>
                        <td class='px-4 py-8 border-t border-b border-grey-300 text-lg'>
                            <p class='text-center'>No listing found</p>
                        </td>
                    </tr>
                @endunless
                
            </tbody>
        </table>
     </x-carddd>
</x-layout>