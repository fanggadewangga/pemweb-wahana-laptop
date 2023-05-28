<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
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
                    <a href="catalog.html" class="font-semibold text-gray-400 text-base hover:text-purple-900 hover:font-bold">Catalog</a>
                </li>
                <li>
                    <a href="barang.html" class="font-bold text-purple-900 text-base hover:text-purple-900 hover:font-bold">Barang</a>
                </li>
            </ul>
        </div>
        <!-- Navbar end -->
        <div class="w-1/7 flex items-center px-4 py-3 justify-between">
            <img class="w-12 h-12 mr-4 rounded-full" src="{{url('/assets/user.png')}}" alt="User" />
            <div class="flex flex-col">
                <button>
                    <h3 class="font-normal mb-0.15 text-lg">Evan Laksana</h3>
                </button>
                <h4 class="text-gray-500 font-normal text-sm">Owner</h4>
            </div>
        </div>
    </div>
    <!-- Top bar end -->

    <!-- Product detail start -->
    <div class="w-full flex flex-col">
        <div class="w-full flex justify-end">
            <div class="w-3/4 flex flex-row">
                <img src="{{ url('/assets/laptop.png') }}" class="w-3/4 mx-auto mt-12 rounded-2xl" />
                <button class="px-12 ml-32 h-10 text-white bg-purple-900 mt-12 rounded-full mr-48">
                    Edit
                </button>
            </div>
        </div>


        <!-- Product name start -->
        <div class="w-7/12 flex mx-auto">
            <h1 class="ml-16 px-4 mt-8 items-center text-5xl font-bold">
                {{ $barang->tipe_barang }}
            </h1>
        </div>
        <!-- Product name end -->

        <!-- Product price start -->
        <div class="w-7/12 flex flex-row mx-auto justify-start items-center">
            <h1 class="ml-16 px-4 mt-8 text-2xl font-bold">
                Harga
            </h1>
            <button class="px-6 py-1 mt-8 rounded-3xl bg-purple-900 text-white text-xl font-bold">
                Rp{{ $barang->harga_satuan }}
            </button>
        </div>
        <!-- Product price end -->

        <!-- Product stock start -->
        <div class="w-7/12 flex flex-row mx-auto justify-start items-center">
            <h1 class="ml-16 px-4 mt-8 text-2xl font-bold">
                Stok
            </h1>
            <button class="px-6 py-1 mt-8 rounded-3xl bg-purple-900 text-white text-xl font-bold">
                {{ $barang->stok }}
            </button>
        </div>
        <!-- Product stock end -->

        <!-- Product specs container start -->
        <div class="h-full w-1/2 flex flex-row my-16 mx-auto justify-center items-center">

            <!-- Product specs start -->
            <div class="h-full w-6/12 py-8 px-10 flex flex-col drop-shadow-2xl rounded-3xl mx-8 bg-gray-100">
                <div class="px-4">
                    <h1 class="text-2xl text-white bg-purple-950 items-center px-20 py-3 rounded-full">
                        Spesifikasi
                    </h1>
                </div>
                <div class="text-xl py-4 font-medium text-gray-600 mt-4">
                    <div class="flex flex-row">
                        <p class="items-start justify-start mt-1">
                            •
                        </p>
                        <p class="items-start justify-start ml-1">
                            Processor AMD A9-9420
                        </p>
                    </div>

                    <div class="flex flex-row">
                        <p class="items-start justify-start mt-1">
                            •
                        </p>
                        <p class="items-start justify-start mt-1 ml-1">
                            Memory DDR4 4Gb
                        </p>
                    </div>

                    <div class="flex flex-row">
                        <p class="items-start justify-start mt-1">
                            •
                        </p>
                        <p class="items-start justify-start mt-1 ml-1">
                            SSD 120Gb – HDD 500Gb
                        </p>
                    </div>

                    <div class="flex flex-row">
                        <p class="items-start justify-start mt-1">
                            •
                        </p>
                        <p class="items-start justify-start mt-1 ml-1">
                            Graphics AMD Radeon R5 and Radeon M420 2Gb
                        </p>
                    </div>

                    <div class="flex flex-row">
                        <p class="items-start justify-start mt-1">
                            •
                        </p>
                        <p class="items-start justify-start mt-1 ml-1">
                            15.6inch LED FHD 1080
                        </p>
                    </div>

                    <div class="flex flex-row">
                        <p class="items-start justify-start mt-1">
                            •
                        </p>
                        <p class="items-start justify-start mt-1 ml-1">
                            Baterai Normal
                        </p>
                    </div>
                </div>
            </div>
            <!-- Product specs end -->

            <!-- Product completenes start -->
            <div class="h-full w-6/12 pt-8 px-10 flex flex-col drop-shadow-2xl rounded-3xl mx-8 bg-gray-100">
                <div class="px-4">
                    <h1 class="text-2xl text-white bg-purple-950 items-center px-20 py-3 rounded-full">
                        Kelengkapan
                    </h1>
                </div>
                <div class="text-xl font-medium text-gray-600 my-4">
                    <div class="flex flex-row">
                        <p class="items-start justify-start mt-1">
                            1.
                        </p>
                        <p class="items-start justify-start mt-1 ml-1">
                            Laptop ASUS VivoBook X555BP-BX921T
                        </p>
                    </div>

                    <div class="flex flex-row">
                        <p class="items-start justify-start mt-1">
                            2.
                        </p>
                        <p class="items-start justify-start mt-1 ml-1">
                            Baterai laptop
                        </p>
                    </div>

                    <div class="flex flex-row">
                        <p class="items-start justify-start mt-1">
                            3.
                        </p>
                        <p class="items-start justify-start mt-1 ml-1">
                            Adaptor daya
                        </p>
                    </div>

                    <div class="flex flex-row">
                        <p class="items-start justify-start mt-1">
                            4.
                        </p>
                        <p class="items-start justify-start mt-1 ml-1">
                            Kabel pengisi daya
                        </p>
                    </div>

                    <div class="flex flex-row">
                        <p class="items-start justify-start mt-1">
                            5.
                        </p>
                        <p class="items-start justify-start mt-1 ml-1">
                            Panduan pengguna
                        </p>
                    </div>

                    <div class="flex flex-row">
                        <p class="items-start justify-start mt-1">
                            6.
                        </p>
                        <p class="items-start justify-start mt-1 ml-1">
                            Kartu garansi
                        </p>
                    </div>

                    <div class="flex flex-row">
                        <p class="items-start justify-start mt-1">
                            7.
                        </p>
                        <p class="items-start justify-start mt-1 ml-1">
                            Kartu dukungan teknis
                        </p>
                    </div>

                    <div class="flex flex-row">
                        <p class="items-start justify-start mt-1">
                            8.
                        </p>
                        <p class="items-start justify-start mt-1 ml-1">
                            Tas laptop
                        </p>
                    </div>
                </div>
            </div>
            <!-- Product completenes end -->
        </div>
        <!-- Product specs container end-->

    </div>
    <!-- Product detail end -->

</body>