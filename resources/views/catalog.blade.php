<!DOCTYPE html>
<html lang="en">

<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Catalog</title>
</head>

<body>
    <!-- Top bar start-->
    <div class="w-full shadow-md flex justify-between px-8">
        <!-- Store name start -->
        <h1 class="font-medium flex items-center text-2xl text-purple-900 mr-6 drop-shadow-2xl">
            Wahana
            <span class="font-extrabold">laptop</span>
        </h1>
        <!-- Store name end -->

        <!-- Navbar start -->
        <div class="w-1/5 flex items-center">
            <ul class="w-full flex flex-row justify-between">
                <li>
                    <a href="#" class="font-semibold text-gray-400 text-base hover:text-purple-900 hover:font-bold">Dashboard</a>
                </li>
                <li>
                    <a href="{{ url('/catalog') }}" class="font-bold text-purple-900 text-base hover:text-purple-900 hover:font-bold">Catalog</a>
                </li>
                <li>
                    <a href="{{ url('/barang/all') }}" class="font-semibold  text-gray-400 text-base hover:text-purple-900 hover:font-bold">Barang</a>
                </li>
            </ul>
        </div>
        <!-- Navbar end -->
        <div class="w-1/7 flex items-center px-4 py-3 justify-between">
            <img class="w-12 h-12 mr-4 rounded-full" src="{{url('/assets/user.png')}}" alt="Back" />
            <div class="flex flex-col">
                <button>
                    <h3 class="font-normal mb-0.15 text-lg">Evan Laksana</h3>
                </button>
                <h4 class="text-gray-500 font-normal text-sm">Owner</h4>
            </div>
        </div>
    </div>
    <!-- Top bar end -->

    <!-- Search field start -->
    <div class="relative flex items-center justify-center h-screen">
        <img src="{{url('/assets/laptop.png')}}" class="w-full h-screen absolute" />
        <div class="w-full flex flex-col items-center justify-center absolute top-[300px]">
            <div class="items-start pr-96">
                <h1 class="font-bold text-6xl text-white">Wahana Laptop</h1>
                <h3 class="text-white font-light text-lg mt-8">
                    Dapatkan Informasi seputar PC-Laptop
                </h3>
            </div>

            <!-- Search bar start -->
            <div class="w-full flex items-center justify-center mt-16">
                <div class="relative w-6/12 h-96">
                    <form action="{{ url('/catalog/search') }}" method="GET">
                        <div class="w-full flex flex-row rounded-full bg-gray-200">
                            <input type="text" name="keyword" placeholder="MacBook Pro 8.1 Early 2011 Core i5 SSD 256Gb" class="w-full py-8 pl-12 pr-8 text-lg font-semibold rounded-full bg-gray-200 focus:outline-none" />
                            <button type="submit" class="w-96 px-16 my-2 mr-2 text-white bg-purple-900 rounded-full font-semibold">
                                Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Search bar end -->

        </div>
    </div>
    <!-- Search field end -->

    <!-- Text start -->
    <div class="flex flex-col items-center justify-center w-full h-64">
        <h1 class="text-5xl font-bold">Laptop bekas</h1>
        <div class="flex flex-row items-center">
            <a href="{{ url('/barang/all') }}" class="text-2xl font-bold mt-8 text-purple-900 hover:text-purple-600">See others <span class="font-extrabold">→</span></a>
        </div>
    </div>
    <!-- Text end -->

    <!-- Laptop container start -->
    <div class="w-full flex flex-col">

        <!-- 1st row start -->
        <div class="flex flex-row items-center justify-center px-32">
            @php
            $count = 0;
            @endphp

            @for($i = 0; $i < count($barang) && $count < 3; $i++) @php $brg=$barang[$i]; @endphp @if($brg->jenis_barang === "Laptop")
                <!-- Product card start -->
                <div class="justify-center">
                    <div class="h-full mx-8 flex flex-col  items-center rounded-lg dark:border-gray-700">
                        <img class="rounded-lg w-96 h-60" src="{{ url($brg->foto_barang) }}" alt="product image" />
                        <div class="overflow-hidden">
                            <h5 class="mx-6 px-8 my-4 text-2xl font-bold tracking-tight text-center text-black">
                                {{ $brg->tipe_barang }}
                            </h5>
                            <h5 class="w-96 text-xl mb-6 font-normal tracking-tight text-center line-clamp-2 text-black">
                                {{ $brg->spesifikasi }}
                            </h5>
                            <h5 class="text-2xl mb-8 font-bold tracking-tight text-center text-black">
                                Rp{{ $brg->harga_satuan }}
                            </h5>
                        </div>
                        <a href="{{ url('/barang/detail', $brg->id_barang) }}" class="px-12 py-3 bg-purple-800 items-center text-xl text-white rounded-full font-semibold">
                            See Detail
                        </a>
                    </div>
                </div>
                <!-- Product card end -->
                @php
                $count++;
                @endphp
                @endif
                @endfor

        </div>
        <!-- 1st row end -->

        <!-- 2nd row start -->
        <div class="flex flex-row items-center justify-center px-32 mt-16">
            @php
            $count = 0;
            $startIndex = 8;
            @endphp

            @for($i = $startIndex; $i < count($barang) && $count < 3; $i++) @php $brg=$barang[$i]; @endphp @if($brg->jenis_barang === "Laptop")
                <!-- Product card start -->
                <div class="justify-center">
                    <div class="h-full mx-8 flex flex-col  items-center rounded-lg dark:border-gray-700">
                        <img class="rounded-lg w-96 h-60" src="{{ url($brg->foto_barang) }}" alt="product image" />
                        <div class="overflow-hidden">
                            <h5 class="mx-6 px-8 my-4 text-2xl font-bold tracking-tight text-center text-black">
                                {{ $brg->tipe_barang }}
                            </h5>
                            <h5 class="w-96 text-xl mb-6 font-normal tracking-tight text-center line-clamp-2 text-black">
                                {{ $brg->spesifikasi }}
                            </h5>
                            <h5 class="text-2xl mb-8 font-bold tracking-tight text-center text-black">
                                Rp{{ $brg->harga_satuan }}
                            </h5>
                        </div>
                        <a href="{{ url('/barang/detail', $brg->id_barang) }}" class="px-12 py-3 bg-purple-800 items-center text-xl text-white rounded-full font-semibold">
                            See Detail
                        </a>
                    </div>
                </div>
                <!-- Product card end -->

                @php
                $count++;
                @endphp
                @endif

                @if($count === 3)
                @php
                $startIndex = $i + 1;
                @endphp
                @endif
                @endfor

        </div>
        <!-- 2nd row end -->
    </div>
    <!-- laptop container end -->


    <!-- Banner start -->
    <div class="mt-16 relative flex items-center justify-center h-screen">
        <img src="{{url('/assets/home-banner.png')}}" class="w-full h-screen absolute" />
        <div class="flex flex-col items-start absolute top-[300px]">
            <h1 class="w-8/12 font-bold text-6xl text-white">
                Cari Sparepart Laptop Original Disini Aja
            </h1>
            <a href="{{ url('/barang/all') }}">
                <button class="px-16 py-6 mt-8 bg-purple-800 items-center text-xl text-white rounded-full font-semibold">
                    Search
                </button>
            </a>
        </div>
    </div>
    <!-- Banner end -->

    <!-- Text start -->
    <div class="flex flex-col items-center justify-center w-full h-64">
        <h1 class="text-5xl font-bold">Sparepart Original</h1>
        <div class="flex flex-row items-center">
            <a href="{{ url('/barang/all') }}" class=" text-2xl font-bold mt-8 text-purple-900 hover:text-purple-600">See others <span class="font-extrabold">→</span></a>
        </div>
    </div>
    <!-- Text end -->

    <!-- Sparepart container start -->
    <div class="w-full flex flex-col">

        <!-- 1st row start -->
        <div class="flex flex-row items-center justify-center px-32">
            @php
            $count = 0;
            @endphp

            @for($i = 0; $i < count($barang) && $count < 3; $i++) @php $brg=$barang[$i]; @endphp @if($brg->jenis_barang !== "Laptop")
                <!-- Product card start -->
                <div class="justify-center">
                    <div class="h-full mx-8 flex flex-col  items-center rounded-lg dark:border-gray-700">
                        <img class="rounded-lg w-96 h-60" src="{{ url($brg->foto_barang) }}" alt="product image" />
                        <div class="overflow-hidden">
                            <h5 class="mx-6 px-8 my-4 text-2xl font-bold tracking-tight text-center text-black">
                                {{ $brg->tipe_barang }}
                            </h5>
                            <h5 class="w-96 text-xl mb-6 font-normal tracking-tight text-center line-clamp-2 text-black">
                                {{ $brg->spesifikasi }}
                            </h5>
                            <h5 class="text-2xl mb-8 font-bold tracking-tight text-center text-black">
                                Rp{{ $brg->harga_satuan }}
                            </h5>
                        </div>
                        <a href="{{ url('/barang/detail', $brg->id_barang) }}" class="px-12 py-3 bg-purple-800 items-center text-xl text-white rounded-full font-semibold">
                            See Detail
                        </a>
                    </div>
                </div>
                <!-- Product card end -->

                @php
                $count++;
                @endphp
                @endif
                @endfor
        </div>
        <!-- 1st row end -->

        <!-- 2nd row start -->
        <div class="flex flex-row items-center justify-center px-32 mt-16">
            @php
            $count = 0;
            $startIndex = 8;
            @endphp

            @for($i = $startIndex; $i < count($barang) && $count < 3; $i++) @php $brg=$barang[$i]; @endphp @if($brg->jenis_barang !== "Laptop")
                <!-- Product card start -->
                <div class="justify-center">
                    <div class="h-full mx-8 flex flex-col  items-center rounded-lg dark:border-gray-700">
                        <img class="rounded-lg w-96 h-60" src="{{ url($brg->foto_barang) }}" alt="product image" />
                        <div class="overflow-hidden">
                            <h5 class="mx-6 px-8 my-4 text-2xl font-bold tracking-tight text-center text-black">
                                {{ $brg->tipe_barang }}
                            </h5>
                            <h5 class="w-96 text-xl mb-6 font-normal tracking-tight text-center line-clamp-2 text-black">
                                {{ $brg->spesifikasi }}
                            </h5>
                            <h5 class="text-2xl mb-8 font-bold tracking-tight text-center text-black">
                                Rp{{ $brg->harga_satuan }}
                            </h5>
                        </div>
                        <a href="{{ url('/barang/detail', $brg->id_barang) }}" class="px-12 py-3 bg-purple-800 items-center text-xl text-white rounded-full font-semibold">
                            See Detail
                        </a>
                    </div>
                </div>
                <!-- Product card end -->

                @php
                $count++;
                @endphp
                @endif

                @if($count === 3)
                @php
                $startIndex = $i + 1;
                @endphp
                @endif
                @endfor
        </div>
        <!-- 2nd row end -->
    </div>
    <!-- Sparepart container end -->
</body>

</html>