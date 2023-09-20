{{-- We need access to the view calling the component --}}
{{-- to do this we'll add a @props --}}
@props(['listing'])

<x-card>
    <div class="flex">
        {{-- if we have an image link in the table : show the image --}}
        {{-- otherwise, show the default image --}}
        <img class="hidden w-48 mr-6 md:block" 
        src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png')}}" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{ $listing->id }}">{{ $listing->title }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
            <x-listing-tags :tagsCsv="$listing->tags" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
            </div>
        </div>
    </div>
</x-card>