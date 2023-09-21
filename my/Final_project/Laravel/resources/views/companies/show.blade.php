<?php
// dd($highPricesLast30);
?>

<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Use a media query to add a breakpoint at 800px: */
        @media screen and (max-width: 871px) {
            #flexy {
                display: flex;
                flex-direction: column-reverse;
            }

            #flegzy {
                display: inline;
            }
        }
    </style>
</head>
<x-layout>
    {{-- Display other information about the company --}}
    <x-card class="mx-auto w-4/5 rounded-md border-double shadow-lg shadow-laravel card ">

        <div id="flexy" class="flex flex-between p-10 rounded border">
            <div>
                <h1 class="pt-2 text-4xl font-bold uppercase text-laravel text-center"
                    style="font:family 'Roboto', sans-serif;">
                    {{ $company->fullname }}</h1>

                {{-- this is not the last 30 days highest price --}}
                <h1 class="pt-2 text-xl font-bold uppercase text-laravel text-center"
                style="font:family 'Roboto', sans-serif;">Last closing highest price: </h1>
                <div style=" color: {{ $classInd }};">
                    <h1 class="pt-2 text-4xl font-bold uppercase text-center">
                        ${{ number_format($highPricesLast30[0], 4) }}</h1>
                    <p class="text-center">
                        @if ($difference >= 0)
                            <i class="fa-solid fa-arrow-up"></i>
                        @else
                            <i class="fa-solid fa-arrow-down"></i>
                        @endif

                        {{-- this is already a percent value you dumb f**k, it compares two highest prices --}}
                        {{ $difference }}%
                    </p>
                </div>
            </div>
            <img src="{{ asset('logos/' . $company->ticker . '.png') }}" alt=""
                class="card-img-top img-fluid rounded-circle company-logo p-3 img-thumbnail mx-auto d-block"
                style="width: 150px; height: 150px;">
        </div>
        <form action='/companies/add/{{ $company->ticker }}' method='POST' class="mt-5">
            @csrf
            @method('post')
            <input type="hidden" name="company_id" value="{{ $company->id }}">
            <input type="number" name="quantity" class="h-10 rounded border text-center" required
                placeholder="Quantity">
            <button type="submit"
                class="btn btn-primary mx-auto bg-laravel text-white h-10 py-1 px-2 rounded sm:text-lg hover:text-laravel3 text-center">Add
                to Portfolio</button>
        </form>
        <div class="flex justify-end py-10">
            <p class="text-laravel text-xl">This graph represents last 30 days highest price</p>
          </div>
        
        <canvas id="priceChart"></canvas>
        <div id="flegzy" class="flex flex-row flex-wrap justify-around gap-3 border">
            <ul class="list-unstyled p-3">
                <li>
                    <p
                        class="pb-2 sm:text-sm md:text-base lg:text-lg xl:text-xl text-gray-200 my-4 text-laravel font-bold">
                        <span class="text-laravel2">Full company name:</span> {{ $company->fullname }}
                    </p>
                </li>
                <li>
                    <p
                        class="pb-2 sm:text-sm md:text-base lg:text-lg xl:text-xl text-gray-200 my-4 text-laravel font-bold">
                        <span class="text-laravel2">Country:</span> {{ $company->country }}
                    </p>
                </li>
                <li>
                    <p
                        class="pb-2 sm:text-sm md:text-base lg:text-lg xl:text-xl text-gray-200 my-4 text-laravel font-bold">
                        <span class="text-laravel2">Sector:</span> {{ $company->sector }}
                    </p>
                </li>
                <li>
                    <p
                        class="pb-2 sm:text-sm md:text-base lg:text-lg xl:text-xl text-gray-200 my-4 text-laravel font-bold">
                        <span class="text-laravel2">Industry:</span> {{ $company->industry }}
                    </p>
                </li>
                <li>
                    <p
                        class="pb-2 sm:text-sm md:text-base lg:text-lg xl:text-xl text-gray-200 my-4 text-laravel font-bold">
                        <span class="text-laravel2">Market cap:</span>
                        @if ($company->market_cap >= 1000000000000)
                            ${{ number_format($company->market_cap / 1000000000000, 2) }} T
                        @elseif ($company->market_cap >= 1000000000)
                            ${{ number_format($company->market_cap / 1000000000, 2) }} B
                        @elseif ($company->market_cap >= 1000000)
                            ${{ number_format($company->market_cap / 1000000, 2) }} M
                        @else
                            ${{ $company->market_cap }}
                        @endif
                    </p>
                </li>
                <li>
                    <p
                        class="pb-2 sm:text-sm md:text-base lg:text-lg xl:text-xl text-gray-200 my-4 text-laravel font-bold no-padding">
                        <span class="text-laravel2">Analytics recomendation:</span> {{ $company->recomendation }}
                    </p>
                </li>
                <li>
                    <p
                        class="pb-2 sm:text-sm md:text-base lg:text-lg xl:text-xl text-gray-200 my-4 text-laravel font-bold no-padding">
                        <span class="text-laravel2">Regular market price:</span>
                        ${{ $company->regular_market_price }}
                    </p>
                </li>
                <li>
                    <p
                        class="pb-2 sm:text-sm md:text-base lg:text-lg xl:text-xl text-gray-200 my-4 text-laravel font-bold no-padding">
                        <span class="text-laravel2">Regular market change:</span>
                        ${{ $company->regular_market_change }}
                    </p>
                </li>
                <li>
                    <p
                        class="pb-2 sm:text-sm md:text-base lg:text-lg xl:text-xl text-gray-200 my-4 text-laravel font-bold no-padding">
                        <span class="text-laravel2">Target mean price:</span> ${{ $company->target_mean_price }}
                    </p>
                </li>
                <li>
                    <p
                        class="pb-2 sm:text-sm md:text-base lg:text-lg xl:text-xl text-gray-200 my-4 text-laravel font-bold no-padding">
                        <span class="text-laravel2">Earnings per share:</span> ${{ $company->EPS }}
                    </p>
                </li>
            </ul>
            <ul class="list-unstyled p-3">
                <li>
                    <p
                        class="pb-2 sm:text-sm md:text-base lg:text-lg xl:text-xl text-gray-200 my-4 text-laravel font-bold">

                        <span class="text-laravel2">Highest price:</span>

                    </p>
                </li>
                <li>
                    <p
                        class="pb-2 sm:text-sm md:text-base lg:text-lg xl:text-xl text-gray-200 my-4 text-laravel font-bold">
                        <span class="text-laravel2">
                            @if ($date == $businessDays[0])
                                Today
                            @else
                                {{ $businessDays[0] }}
                            @endif
                        </span>${{ number_format($highPricesLast30[0], 2) }}
                    </p>
                </li>
                <li>
                    <p
                        class="pb-2 sm:text-sm md:text-base lg:text-lg xl:text-xl text-gray-200 my-4 text-laravel font-bold">
                        <span class="text-laravel2">{{ $businessDays[1] }}</span>
                        ${{ number_format($highPricesLast30[1], 2) }}
                    </p>
                </li>
                <li>
                    <p
                        class="pb-2 sm:text-sm md:text-base lg:text-lg xl:text-xl text-gray-200 my-4 text-laravel font-bold">
                        <span class="text-laravel2">{{ $businessDays[2] }}</span>
                        ${{ number_format($highPricesLast30[2], 2) }}
                    </p>
                </li>
                <li>
                    <p
                        class="pb-2 sm:text-sm md:text-base lg:text-lg xl:text-xl text-gray-200 my-4 text-laravel font-bold">
                        <span class="text-laravel2">{{ $businessDays[3] }}</span>
                        ${{ number_format($highPricesLast30[3], 2) }}
                    </p>
                </li>
                <li>
                    <p
                        class="pb-2 sm:text-sm md:text-base lg:text-lg xl:text-xl text-gray-200 my-4 text-laravel font-bold">
                        <span class="text-laravel2">{{ $businessDays[4] }}</span>
                        ${{ number_format($highPricesLast30[4], 2) }}
                    </p>
                </li>
                <li>
                    <p
                        class="pb-2 sm:text-sm md:text-base lg:text-lg xl:text-xl text-gray-200 my-4 text-laravel font-bold">
                        <span class="text-laravel2">Previous Close:</span>
                        ${{ number_format($highPricesLast30[1], 2) }}
                    </p>
                </li>
                <li>
                    <p
                        class="pb-2 sm:text-sm md:text-base lg:text-lg xl:text-xl text-gray-200 my-4 text-laravel font-bold">
                        <span class="text-laravel2">52 Week Range</span>
                        ${{ number_format($week52High, 2) }} - ${{ number_format($week52Low, 2) }}
                    </p>
                </li>
                <li>
                    <p
                        class="pb-2 sm:text-sm md:text-base lg:text-lg xl:text-xl text-gray-200 my-4 text-laravel font-bold">
                        <span class="text-laravel2">Regular Martket Price</span>
                        ${{ $regPrice }}
                    </p>
                </li>
                <li>
                    <p
                        class="pb-2 sm:text-sm md:text-base lg:text-lg xl:text-xl text-gray-200 my-4 text-laravel font-bold">
                        <span class="text-laravel2">Total Volume</span>

                        @if ($totalVolume !== null && $totalVolume !== 0)
                            ${{ number_format($totalVolume, 0) }}
                        @else
                            {{ $noData }}
                        @endif
                    </p>
                </li>


        </div>

        <p class="card-text text-center pb-2 sm:text-lg text-gray-200 my-4 text-laravel">
            {{ substr($description, 0, 200) }} <!-- Display first 200 characters of description -->
            @if (strlen($description) > 200)
                <span id="dots">...</span> <!-- Dots to indicate truncation -->
                <span id="more" style="display: none;">{{ substr($description, 200) }}</span>
                <!-- Rest of description onclick-->
                <button onclick="readMore()" id="read-more-btn" class="btn btn-link text-laravel2">Read
                    more</button>
            @endif
        </p>

        {{-- Extend the description function --}}
        <script>
            function readMore() {
                var dots = document.getElementById("dots");
                var moreText = document.getElementById("more");
                var btnText = document.getElementById("read-more-btn");
                if (dots.style.display === "none") {
                    dots.style.display = "inline";
                    btnText.innerHTML = "Read more";
                    moreText.style.display = "none";
                } else {
                    dots.style.display = "none";
                    btnText.innerHTML = "Read less";
                    moreText.style.display = "inline";
                }
            }
        </script>
        <script>
            // Chart data settings
            try {
                var ctx = document.getElementById('priceChart').getContext('2d');
                var data = {
                    labels: [{{ implode(', ', $labelsArray) }}],
                    datasets: [{
                        label: 'High prices (30 days)',
                        data: [{{ implode(', ', $highPricesLast30reverse) }}],
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgb(0,0,139)',
                        borderWidth: 3,
                        pointRadius: 0,
                    }]
                };

                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: data,
                    options: {
                        responsive: true, // responsive size for mobile view
                        scales: {
                            x: {
                                title: {
                                    display: true,
                                    text: 'Days'
                                }
                            },
                            y: {
                                beginAtZero: false
                            }
                        }
                    }
                });
            } catch (error) {
                console.error("An error occurred:", error);
            }
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </x-card>
</x-layout>
