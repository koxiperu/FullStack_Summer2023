{{-- we need access to the view calling the conponent --}}
{{-- to do this we'll ass @props. And listingpart - the same listing as in index.blade.php,
and as on this page in {{$listingpart...}} --}}
@props(['listingpart'])   

<x-carddd>
    <div class="flex">
        {{-- if we have an image link - show the image, if no - show default image --}}
        <img class="hidden w-48 mr-6 md:block" src="{{$listingpart->logo ? asset('storage/'.$listingpart->logo) : asset('images/no-image.png')}}" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{$listingpart->id}}">{{$listingpart->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$listingpart->company}}</div>
            <x-listing-tags :tagsCsv="$listingpart->tags"/>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i>{{$listingpart->location}}
            </div>
        </div>
    </div>
</x-carddd>