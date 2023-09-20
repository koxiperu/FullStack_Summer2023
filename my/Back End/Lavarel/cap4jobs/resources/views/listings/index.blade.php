    {{-- php way --}}
    {{-- <h1 style='color:red'>PHP</h1>
    <h1><?=$heading?></h1>
    <?php
    foreach($listings as $listing):?>
    <h2><?=$listing['title']?></h2>
    <p><?=$listing['description']?></p>
    <?php endforeach;

    if (count($listings)==0){
        echo '<p>No listings found</p>';
    }
    ?> --}}


{{-- ------------------- --}}
{{-------- blade way -------}}
{{-- ---------------- ------}}
<x-layout>
{{-- this layout is form our layout.blade.php. See it as a class inheritance --}}
{{-- "cocntnent" refers to the name given in @yield of layout.blade.php --}}
{{-- don't forget the @endsection --}}

{{-- add hero partial --}}
    @include('partials._hero')

{{-- add search partial --}}
    @include('partials._search')

    <div class='lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4'>
        @if (count($listings)==0)
            <p>No listings foung</p>  {{--if--}}
        @endif

        @foreach($listings as $listing) {{--foreach--}}
    {{-- component from listing-card.blade.php --}}
            <x-listing-card :listingpart="$listing"/>   
        @endforeach
    </div>
<div class='mt-6 p-4'>
    {{$listings->links()}}
</div>
</x-layout>



{{-- @php
$test = 1; //execute php-code
@endphp
{{$test}} --}}

