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
                    <a href="catalog.html" class="font-semibold text-purple-900 text-base hover:text-purple-900 hover:font-bold">Catalog</a>
                </li>
                <li>
                    <a href="barang.html" class="font-semibold text-gray-400 text-base hover:text-purple-900 hover:font-bold">Barang</a>
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
        <div class="flex flex-col items-start absolute top-[300px]">
            <h1 class="font-bold text-6xl text-white">Wahana Laptop</h1>
            <h3 class="text-white font-light text-lg mt-8">
                Dapatkan Informasi seputar PC-Laptop
            </h3>
            <!-- Search bar start -->
            <div class="w-full flex items-center justify-start mt-8">
                <div class="relative">
                    <div class="w-full flex flex-row rounded-full bg-gray-200">
                        <input type="text" placeholder="MacBook Pro 8.1 Early 2011 Core i5 SSD 256Gb" class="w-full py-8 pl-12 pr-28 rounded-full bg-gray-200 focus:outline-none" />
                        <button class="w-48 px-8 text-white bg-purple-900 rounded-full font-semibold">
                            Search
                        </button>
                    </div>
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
            <a href="barang.html" class="text-2xl font-bold mt-8 text-purple-900 hover:text-purple-600">See others <span class="font-extrabold">→</span></a>
        </div>
    </div>
    <!-- Text end -->

    <!-- Product card container start -->
    <div class="w-full flex flex-row justify-center mb-28">
        <!-- Product card 2 start -->
        <div class="mr-4 ml-4">
            <div class="h-full mx-4 my-4 flex flex-col items-center rounded-lg dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{url('/assets/laptop-card.png')}}" alt="product image" />
                </a>
                <div class="px-5 py-2">
                    <a href="#">
                        <h5 class="text-2xl font-bold tracking-tight text-center text-black">
                            ASUS VivoBook X555BP-BX921T AMD A9 Dual Graphics
                        </h5>
                    </a>
                    <a href="#">
                        <h5 class="text-xl font-normal tracking-tight text-center overflow-ellipsis text-black">
                            Processor AMD A9-9420, Memory DDR4 4Gb, SSD 120Gb – HDD 500Gb,
                            Graphics AMD ...
                        </h5>
                    </a>
                    <a href="#">
                        <h5 class="text-2xl font-bold tracking-tight text-center text-black">
                            Rp 2.695.000
                        </h5>
                    </a>
                </div>
                <button class="px-8 py-3 bg-purple-800 items-center text-xl text-white rounded-full font-semibold">
                    See Detail
                </button>
            </div>
        </div>
        <!-- Product card 2 end -->

        <!-- Product card 2 start -->
        <div class="mr-4 ml-4">
            <div class="h-full mx-4 my-4 flex flex-col items-center rounded-lg dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{url('/assets/laptop-card.png')}}" alt="product image" />
                </a>
                <div class="px-5 py-2">
                    <a href="#">
                        <h5 class="text-2xl font-bold tracking-tight text-center text-black">
                            ASUS VivoBook X555BP-BX921T AMD A9 Dual Graphics
                        </h5>
                    </a>
                    <a href="#">
                        <h5 class="text-xl font-normal tracking-tight text-center overflow-ellipsis text-black">
                            Processor AMD A9-9420, Memory DDR4 4Gb, SSD 120Gb – HDD 500Gb,
                            Graphics AMD ...
                        </h5>
                    </a>
                    <a href="#">
                        <h5 class="text-2xl font-bold tracking-tight text-center text-black">
                            Rp 2.695.000
                        </h5>
                    </a>
                </div>
                <button class="px-8 py-3 bg-purple-800 items-center text-xl text-white rounded-full font-semibold">
                    See Detail
                </button>
            </div>
        </div>
        <!-- Product card 2 end -->

        <!-- Product card 3 start -->
        <div class="mr-4 ml-4">
            <div class="h-full mx-4 my-4 flex flex-col items-center rounded-lg">
                <a href="#">
                    <img class="rounded-t-lg" src="{{url('/assets/laptop-card.png')}}" alt="product image" />
                </a>
                <div class="px-5 py-2">
                    <a href="#">
                        <h5 class="text-2xl font-bold tracking-tight text-center text-black">
                            ASUS VivoBook X555BP-BX921T AMD A9 Dual Graphics
                        </h5>
                    </a>
                    <a href="#">
                        <h5 class="text-xl font-normal tracking-tight text-center overflow-ellipsis text-black">
                            Processor AMD A9-9420, Memory DDR4 4Gb, SSD 120Gb – HDD 500Gb,
                            Graphics AMD ...
                        </h5>
                    </a>
                    <a href="#">
                        <h5 class="text-2xl font-bold tracking-tight text-center text-black">
                            Rp 2.695.000
                        </h5>
                    </a>
                </div>
                <button class="px-8 py-3 bg-purple-800 items-center text-xl text-white rounded-full font-semibold">
                    See Detail
                </button>
            </div>
        </div>
        <!-- Product card 3 end -->
    </div>
    <!-- Product card container end -->

    <!-- Banner start -->
    <div class="mt16 relative flex items-center justify-center h-screen">
        <img src="{{url('/assets/home-banner.png')}}" class="w-full h-screen absolute" />
        <div class="flex flex-col items-start absolute top-[300px]">
            <h1 class="w-64 font-bold text-6xl text-white">
                Cari Sparepart Laptop Original Disini Aja
            </h1>
            <button class="px-8 py-3 bg-purple-800 items-center text-xl text-white rounded-full font-semibold">
                Search
            </button>
        </div>
    </div>
    <!-- Banner end -->

    <!-- Product card container start -->
    <div class="w-full flex flex-row justify-cente">
        <!-- Product card 1 start -->
        <div class="mr-4 ml-4 w-64">
            <div class="h-full mx-4 my-4 flex flex-col items-center rounded-lg dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg w-64" src="{{url('/assets/laptop-card.png')}}" alt="product image" />
                </a>
                <div class="px-5 py-2">
                    <a href="#">
                        <h5 class="text-2xl font-bold tracking-tight text-center text-black dark:text-white my-2">
                            ASUS VivoBook X555BP-BX921T AMD A9 Dual Graphics
                        </h5>
                    </a>
                    <a href="#">
                        <h5 class="text-xl font-normal tracking-tight text-center overflow-ellipsis text-black dark:text-white my-2">
                            Processor AMD A9-9420, Memory DDR4 4Gb, SSD 120Gb – HDD 500Gb,
                            Graphics AMD ...
                        </h5>
                    </a>
                    <a href="#">
                        <h5 class="text-2xl font-bold tracking-tight text-center text-black dark:text-white my-2">
                            Rp 2.695.000
                        </h5>
                    </a>
                </div>
                <button class="px-8 py-3 bg-purple-800 items-center text-xl text-white rounded-full font-semibold">
                    See Detail
                </button>
            </div>
        </div>
        <!-- Product card 1 end -->

        <!-- Product card 2 start -->
        <div class="mr-4 ml-4">
            <div class="h-full mx-4 my-4 flex flex-col items-center rounded-lg">
                <a href="#">
                    <img class="rounded-t-lg" src="{{url('/assets/laptop-card.png')}}" alt="product image" />
                </a>
                <div class="px-5 py-2">
                    <a href="#">
                        <h5 class="text-2xl font-bold tracking-tight text-center text-black">
                            ASUS VivoBook X555BP-BX921T AMD A9 Dual Graphics
                        </h5>
                    </a>
                    <a href="#">
                        <h5 class="text-xl font-normal tracking-tight text-center overflow-ellipsis text-black">
                            Processor AMD A9-9420, Memory DDR4 4Gb, SSD 120Gb – HDD 500Gb,
                            Graphics AMD ...
                        </h5>
                    </a>
                    <a href="#">
                        <h5 class="text-2xl font-bold tracking-tight text-center text-black">
                            Rp 2.695.000
                        </h5>
                    </a>
                </div>
                <button class="px-8 py-3 bg-purple-800 items-center text-xl text-white rounded-full font-semibold">
                    See Detail
                </button>
            </div>
        </div>
        <!-- Product card 2 end -->

        <!-- Product card 3 start -->
        <div class="mr-4 ml-4">
            <div class="h-full mx-4 my-4 flex flex-col items-center rounded-lg">
                <a href="#">
                    <img class="rounded-t-lg" src="{{url('/assets/laptop-card.png')}}" alt="product image" />
                </a>
                <div class="px-5 py-2">
                    <a href="#">
                        <h5 class="text-2xl font-bold tracking-tight text-center text-black">
                            ASUS VivoBook X555BP-BX921T AMD A9 Dual Graphics
                        </h5>
                    </a>
                    <a href="#">
                        <h5 class="text-xl font-normal tracking-tight text-center overflow-ellipsis text-black">
                            Processor AMD A9-9420, Memory DDR4 4Gb, SSD 120Gb – HDD 500Gb,
                            Graphics AMD ...
                        </h5>
                    </a>
                    <a href="#">
                        <h5 class="text-2xl font-bold tracking-tight text-center text-black">
                            Rp 2.695.000
                        </h5>
                    </a>
                </div>
                <button class="px-8 py-3 bg-purple-800 items-center text-xl text-white rounded-full font-semibold">
                    See Detail
                </button>
            </div>
        </div>
        <!-- Product card 3 end -->
        <!-- Product card container end -->
    </div>
</body>

</html>