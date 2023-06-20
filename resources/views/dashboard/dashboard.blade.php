<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200">
    <!-- Top bar start-->
    <div class="w-full shadow-md flex justify-between px-8">
        <!-- Store name start -->
        <h1 class="font-medium flex items-center text-2xl text-purple-900 mr-6 drop-shadow-2xl">
            Wahana
            <span class="font-extrabold">laptop</span>
        </h1>
        <!-- Store name end -->

        <!-- Navbar start -->
        <div class="w-2/12 flex items-center">
            <ul class="w-full mx-auto flex flex-row justify-between">
                <li>
                    <a href="{{ url('/dashboard') }}" class="font-bold text-purple-900 text-base hover:text-purple-900 hover:font-bold">Dashboard</a>
                </li>
                <li>
                    <a href="{{ url('/catalog') }}" class="font-semibold text-gray-400 text-base hover:text-purple-900 hover:font-bold">Catalog</a>
                </li>
            </ul>
        </div>
        <!-- Navbar end -->
        <div class="w-1/7 flex items-center px-4 py-3 justify-between">
            <img class="w-12 h-12 mr-4 rounded-full" src="{{url('/assets/user.png')}}" alt="User" />
            <div class="flex flex-row">
                <div class="flex flex-col">
                    <button>
                        <h3 class="font-normal mb-0.15 text-lg">Evan Laksana</h3>
                    </button>
                    <h4 class="text-gray-500 font-normal text-sm">Owner</h4>
                </div>
                <form action="{{url('logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="flex items-center ml-4">
                        <img src="{{url('/assets/logout.png')}}" alt="Logout" class="w-8 h-8">
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- Top bar end -->

    <!-- Dashboard heading start -->
    <h1 class="text-5xl flex items-center justify-center font-bold mt-16">
        Tabel Data Wahana Laptop
    </h1>
    <!-- Dashboard heading end -->

    <!-- First row start -->
    <div class="w-8/12 flex flex-row mx-auto items-center justify-between mt-16">
        <a href="{{ url('/barang/all') }}" class="px-24 py-12 bg-blue-400 rounded-2xl shadow drop-shadow-xl shadow-gray-300 text-purple-800 text-5xl font-bold">
            Barang
        </a>
        <a href="{{ url('/pembelian/all') }}" class="px-24 py-12 bg-blue-400 rounded-2xl shadow drop-shadow-xl shadow-gray-300 text-purple-800 text-5xl font-bold">
            Pembelian
        </a>
        <a href="{{ url('/nota/all') }}" class="px-24 py-12 bg-blue-400 rounded-2xl shadow drop-shadow-xl shadow-gray-300 text-purple-800 text-5xl font-bold">
            Nota
        </a>
    </div>
    <!-- First row end -->

    <!-- Second row start -->
    <div class="w-6/12 flex flex-row mx-auto items-center justify-between mt-16">
        <a href="{{ url('/karyawan/all') }}" class="px-24 py-12 bg-blue-400 rounded-2xl shadow drop-shadow-xl shadow-gray-300 text-purple-800 text-5xl font-bold">
            Karyawan
        </a>
        <a href="{{ url('/customer/all') }}" class="px-24 py-12 bg-blue-400 rounded-2xl shadow drop-shadow-xl shadow-gray-300 text-purple-800 text-5xl font-bold">
            Customer
        </a>
    </div>
    <!-- Second row end -->

</body>

</html>