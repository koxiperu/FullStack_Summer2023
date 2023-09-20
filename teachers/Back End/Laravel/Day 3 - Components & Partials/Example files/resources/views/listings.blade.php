@extends('layout')
{{-- this "layout" is form our layout.blade.php --}}
{{-- see it as a class inheritance --}}

@section('content')
{{-- "content" refers to the name given in the @yield of layout.blade.php --}}
{{-- don't forget the @endsection at the end ;) --}}

{{-- add hero partial --}}
@include('partials._hero')

{{-- add search partial --}}
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
@if (count($listings) == 0)
    <p>No listing found</p>
@endif

@foreach ($listings as $listing)
{{-- :listing passes the current listing data to the component --}}
{{-- that way, listing-card can display the data dynamically --}}
    <x-listing-card :listing="$listing" />
@endforeach
</div>
@endsection