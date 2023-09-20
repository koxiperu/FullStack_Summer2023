@props(['prodpart'])

<div class='inline bd-dark w-card'>
    <div class='incol'>
        <img class="prod-img" src="{{$prodpart->pic ? asset('storage/'.$prodpart->pic) : asset('images/accessoires1.jpg')}}" alt="" />
        @auth
        @if((auth()->user()->id)!=($prodpart->user_id))
        <div>
            <form action="/cart/{{$prodpart->id}}">
                @csrf
                @method('get')
                <button class='prod-img non-link but-dark t-15'type="submit">
                    <i class='fa-solid fa-cart-shopping bg-dv'></i> Add to cart
                </button>
            </form>
        </div>
        @else
        <div class=''>
                <a href="/products/{{$prodpart->id}}/edit" class='prod-img non-link but-light t-15'>
                    <i class='fa-solid fa-gear'></i> Edit
                </a>
        </div>
        @endif
    @endauth
    </div>
    <div class='incol'>
        <div>
            <a href="/products/{{$prodpart->id}}" class='non-link t-db t-b '>{{$prodpart->name}}</a>
        </div>    
        <div class="t-b t-v">
            <i class="fa-solid fa-gold-dot"></i>{{$prodpart->price}} $$
        </div>
        <div class="">qty: {{$prodpart->quantity}} Stuk</div>
        <x-prod-tags :tagsCsv="$prodpart->tags"/>
    </div>

</div>