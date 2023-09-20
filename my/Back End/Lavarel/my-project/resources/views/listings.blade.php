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

<hr>

{{-- blade way --}}
<h1 style='color:red'>BLADE</h1>
<h1>{{$heading}}</h1>
@foreach($listings as $listing) {{--foreach--}}
<a href="/listings/{{$listing['id']}}"><h2>{{$listing['title']}}</h2></a>
<p>{{$listing['description']}}</p>
@endforeach

@if (count($listings)==0)
<p>No listings foung</p>  {{--if--}}
@endif


@php
$test = 1; //execute php-code
@endphp
{{$test}}

