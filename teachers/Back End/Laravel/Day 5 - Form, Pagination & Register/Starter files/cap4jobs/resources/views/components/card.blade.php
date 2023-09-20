{{-- to override/add classes to our component we need to merge the attributes --}}
{{-- $attributes represents all the attributes our component --}}
<div {{ $attributes->merge(['class' => 'bg-gray-50 border border-gray-200 rounded p-6'])}}>
    {{-- to insert content inside a component, we need something more --}}
    {{$slot}}
    {{-- the $slot variable is the placeholder for all content to be inserted --}}
</div>