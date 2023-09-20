<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="{{asset('styles/style.css')}}">
    {{-- <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{--<script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "rgb(123, 115, 139)",
                    },
                },
            },
        };
    </script> --}}
    <title>Winted Shop</title>
</head>

<body>
    <x-navbar/>
    @include('partials._search')
    <x-flash-message/>
    <main>
        {{$slot}}
    </main>
    <footer>
        <div class="bg-img">
            <div class="incol">
              
              <ul class="inline just-sp non-list">
                <li class="">
                  <a class="but-white non-link t-v" href="#">About us</a>
                </li>
                <li class="">
                  <a class="but-white non-link t-v" href="#">Payment and delivery</a>
                </li>
                <li class="">
                    <a class="but-white non-link t-v" href="#">Return Policy</a>
                  </li>
              </ul>
              <h5 class=''>Copyright &copy; 2022, All Rights reserved</h5>
            </div>
          </div>
    </footer>
</body>

</html>
