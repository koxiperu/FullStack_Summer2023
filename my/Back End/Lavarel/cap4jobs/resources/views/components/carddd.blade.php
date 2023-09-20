{{-- to overwrite/add classes to our component we need to merge attributes --}}
{{-- $attributes represents all the attributes our component has --}}
<div {{$attributes->merge(['class' => 'bg-gray-50 border border-gray-200 rounded p-6'])}}>
    {{-- to insert content inside a component we need something more --}}
<h1><em>Hello from card-component (card.blade.php). Everything will be fine:)</em></h1>
{{$slot}}

   {{-- the $slot variable is a placeholder for all content to be inserted
All the code that you write between the <x-card> tag will be placed here--}}
</div>
