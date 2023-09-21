<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Added this script from alpinejs.dev for search bar --}}
    <script src="//unpkg.com/alpinejs" defer></script> 
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        ::-webkit-scrollbar{
            width: 5px;
        }
        ::-webkit-scrollbar-track{
            background: #13254c;
        }
        ::-webkit-scrollbar-thumb{
            background: #061128;
        }

        #chatOpen {
        transition: width 0.5s ease-in-out; /* Add transition property */
        }

        @media (max-width: 768px) { /* Adjust the breakpoint as needed */
        #chatOpen {
            width: 80%; /* Adjust the width for smaller screens */
            height: 20vh; /* Adjust the height for smaller screens */
            font-size: 14px; /* Adjust the font size for smaller screens */
        }
    }

    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#081175",
                        laravel2: "#65a147",
                        laravel3: "#acce22"
                    },
                },
            },
        };
    </script>

    <title>StockViser | Track the Market with Confidence</title>
</head>

<x-flash-message />
<body class="mb-48">

    <nav class="flex justify-between bg-laravel items-center mb-4 p-4 md:px-0">
        <div class="flex items-center">
            <a href="/">
                <img class="w-20 logo ml-2" src="{{ asset('images/logo.png') }}" alt="" />

            </a>
        </div> 
        
        <div class="md:hidden">
            <button id="mobile-menu-button"
            class="text-white hover:text-laravel2 focus:outline-none text-2xl px-4 py-2">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <ul class="hidden md:flex space-x-6 mr-6 text-lg ">
            {{-- Adding this auth directive so that it doesn't display the register and login links after the user has been logged in --}}
            @auth {{-- content to be displayed when user is logged in --}}
                @if(session('is_admin'))
                    {{-- Display other navigation links for admin --}}
                   
                    <li>
                        <a href="/" class="hover:no-underline text-white"><button class="hover:text-laravel2"><i class="fa-solid fa-house"></i> Home</button></a>
                    </li>

                    <li>
                        <a href="/manage-users" class="text-white hover:no-underline"><button class="hover:text-laravel2"><i class="fa-solid fa-gear"></i> Manage Users</button></a>
                    </li>
                    <li> {{-- added this LI to incorporate Logout ability --}}
                        <form class="text-white inline" method="POST" action="/logout">

                            @csrf
                            <button class="hover:text-laravel2">
                                <i class="fa-solid fa-sharp fa-door-closed " ></i>&nbsp Logout
                            </button>
                        </form>
                    </li>
                @else
                    {{-- Display "My Dashboard" button for non-admin users --}}

                    <li  class="hover:text-laravel2">
                        <a href="/users/{{ auth()->user()->id }}/dashboard" class="text-white hover:no-underline"><button class="hover:text-laravel2"><i class="fa-solid fa-money-bill-1-wave"></i> My Dashboard</button></a>
                    </li>
                

                    <li>
                        <a href="/" class="text-white hover:no-underline"><button class="hover:text-laravel2"><i class="fa-solid fa-house"></i> Home</button></a>

                    </li>
                    <li> {{-- added this LI to incorporate Logout ability --}}
                        <form class=" text-white inline" method="POST" action="/logout">
                            @csrf
                            <button class="hover:text-laravel2 ">
                                <i class="fa-solid fa-sharp fa-door-closed " ></i>&nbsp Logout
                            </button>
                        </form>
                    </li>
                @endif
            @else {{-- content to be displayed when user is logged out --}} 
                <li>
                    <a href="/register" class="hover:no-underline text-white"><button class="hover:text-laravel2"><i class="fa-solid fa-user-plus"></i> Register</button></a>
                </li>
                <li>
                    <a href="/login" class="hover:no-underline text-white"><button class="hover:text-laravel2"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</button></a>

                </li>
            @endauth
        </ul>

        {{-- Mobile menu view --}}
        <div id="mobile-menu" class="hidden md:hidden absolute top-16 right-0 bg-laravel opacity-90 text-white py-4 px-6 z-20">
    <ul class="space-y-4 text-white flex flex-col items-center justify-center text-center 2">

                @auth
                    <!-- ... your auth mobile menu links here ... -->
                    @if(session('is_admin'))
                    {{-- Display other navigation links for admin --}}
                    
                    <li>
                        <a href="/" class="hover:no-underline text-white "><button class="hover:text-laravel2"><i class="fa-solid fa-house"></i> Home</button></a>
                    </li>
                    <li>
                        <a href="/manage-users" class="hover:no-underline text-white "><button class="hover:text-laravel2"><i class="fa-solid fa-gear"></i> Manage Users</button></a>

                    </li>
                    <li> {{-- added this LI to incorporate Logout ability --}}
                        <form class=" text-white inline" method="POST" action="/logout">
                            @csrf
                            <button class="hover:text-laravel2">
                                <i class="fa-solid fa-sharp fa-door-closed " ></i>&nbsp Logout
                            </button>
                        </form>
                    </li>
                @else
                    {{-- Display "My Dashboard" button for non-admin users --}}
                    <li>

                         <a href="/users/{{ auth()->user()->id }}/dashboard" class="text-white  hover:no-underline"><button class="hover:text-laravel2"><i class="fa-solid fa-money-bill-1-wave"></i> My Dashboard</button></a>
                    </li>
                    
                    <li>
                        <a href="/" class="text-white hover:no-underline"><button class="hover:text-laravel2"><i class="fa-solid fa-house"></i> Home</button></a>

                    </li>
                    <li> {{-- added this LI to incorporate Logout ability --}}
                        <form class=" text-white inline" method="POST" action="/logout">
                            @csrf
                            <button class="hover:text-laravel2">
                                <i class="fa-solid fa-sharp fa-door-closed " ></i>&nbsp Logout
                            </button>
                        </form>
                    </li>
                @endif
                @else
                    <!-- ... your non-auth mobile menu links here ... -->
                    <li>

                        <a href="/register" class="hover:no-underline text-white"><button class="hover:text-laravel2"><i class="fa-solid fa-user-plus"></i> Register</button></a>
                    </li>
                    <li>
                        <a href="/login" class="hover:no-underline text-white"><button class="hover:text-laravel2"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</button></a>

                    </li>
                @endauth
            </ul>
        </div>

    </nav>
    
    <main>
        {{$slot}}        
    </main>
    
    
    <footer
        class="fixed bottom-0 left-0 w-full flex items-center justify-center font-bold bg-laravel text-white h-20 mt-24 opacity-80 z-20 ">
        <p class="ml-2 text-center">Copyright &copy; 2023, All Rights reserved.</p>

    <ul>
        {{-- Social media tags (if we had some socials) --}}
        <li>

        </li>
    </ul>
    @auth
    @include('components.AIchatbox')
    @endauth
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        });
    </script>
</body>

</html>