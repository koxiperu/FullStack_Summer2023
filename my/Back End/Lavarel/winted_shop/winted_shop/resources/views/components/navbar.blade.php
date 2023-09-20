<nav class="bg-img">
    <div class="inline just-sp">
        <a href="/">
        <img src="{{asset('images/snowflake.jpg')}}" style='width:100px' alt=""></a>
        <div>
            @auth
            <div class=' inline just-c'>
            <span class='t-v t-b'> {{--to access to logged user name, we need to use auth() helper--}}
                    Welcome, {{auth()->user()->firstName}}
            </span>
            </div>
            @endauth
            <ul class="non-list inline just-c">
                <li class="">
                    @if(!Str::contains(request()->url(),'categories/1'))
                        <a href="/categories/1" class="non-link but-light dark-sh">Tops</a>
                    @else
                        <a href="#" class="but-dark non-link dark-sh">Tops</a>
                    @endif
                </li> 
                <li class="non-link">
                    @if(!Str::contains(request()->url(),'categories/2'))
                        <a href="/categories/2" class="non-link but-light dark-sh">Jeans</a>
                        @else
                        <a href="#" class="but-dark non-link dark-sh">Jeans</a>
                        @endif
                </li>
                <li class="non-link">
                    @if(!Str::contains(request()->url(),'categories/3'))
                        <a href="/categories/3" class="non-link but-light dark-sh">Shoes</a>
                    @else
                        <a href="#" class="but-dark non-link dark-sh">Shoes</a>
                    @endif
                </li>
                <li class="">
                    @if(!Str::contains(request()->url(),'categories/4'))
                        <a href="/categories/4" class="non-link but-light dark-sh">Accessoires</a>
                    @else
                        <a href="#" class="non-link but-dark dark-sh">Accessoires</a>
                    @endif
                </li>     
            </ul>
        </div>
        @auth     
            <ul class="non-list inline just-c">            
                <li class="dropdown">
                    <a class="dropdown-toggle non-link t-b t-v but-white dark-sh" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    my products <i class="fa-solid fa-heart"></i> </a>                
                    <ul class="w-100 dropdown-menu">
                        <li><a href="/products/create" class="dropdown-item non-link dark-sh"> <i class="fa-solid fa-plus"></i> Create product</a></li>
                        <li><a href="/products/manage" class=" dropdown-item non-link dark-sh"><i class="fa-solid fa-gear"></i> Manage products</a></li>
                        <li><a href="/cart" class=" dropdown-item non-link dark-sh"><i class="fa-solid fa-cart-shopping"></i> My Cart</a></li>
                        <li><a href="/users/{{auth()->user()->id}}/edit" class=" dropdown-item non-link dark-sh"><i class="fa-solid fa-user"></i> Change my personal data</a></li>
                    </ul>
                </li>
                <li>
                    <form class='' method='POST' action="/logout">
                    @csrf
                        <button class="but-dark dark-sh">
                        Log out <i class='fa-solid fa-arrow-right-from-bracket'></i></i>
                        </button>
                    </form>
                </li>
            </ul>
            @else
            <ul class='inline just-c non-list'>
                <li>
                    <a href="/register" class="non-link t-b bd-dark dark-sh"><i class="fa-solid fa-user-plus"></i>
                    Sign up</a>
                </li>
                <li>
                    <a href="/login" class="non-link t-b bd-dark dark-sh"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Log in</a>
                </li>
            </ul>
        @endauth
        
    </div>    
  </nav>
