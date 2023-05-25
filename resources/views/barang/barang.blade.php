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

    <!-- Table container start -->
    <div class="h-screen p-8 justify-between flex flex-col bg-gray-200">
        <div class="mx-36 mt-4">
            <div class="rounded-3xl pb-8 bg-white">
                <!-- Table top bar start -->
                <div class="p-3 h-full w-full shadow-xl flex flex-row">
                    <div class="w-full flex justify-between p-4">
                        <h2 class="font-bold text-l text-purple-dark ml-6">Barang</h2>
                    </div>

                    <!-- Search field start -->
                    <div class="flex items-center justify-center">
                        <div class="relative">
                            <input type="text" placeholder="Search..." class="w-96 py-1.5 pl-10 pr-8 rounded-full bg-gray-200 focus:outline-none" />
                            <svg class="absolute left-3 top-2.5 w-5 h-5 text-gray-400" width="25" height="25" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <ellipse cx="12.8976" cy="10.885" rx="9.10146" ry="8.88476" stroke="#ADB5BD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M19.2278 17.5258L22.7961 21.0001" stroke="#ADB5BD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <!-- Search field end -->

                    <!-- Button add start -->
                    <button class="ps-11 pe-11 items-center mt-2 mb-2 ml-4 mr-4 rounded-full bg-purple-800 text-white font-semibold">
                        Add
                    </button>
                    <!-- Button add end -->
                </div>
                <!-- Table top bar end -->

                <!-- Table start -->
                <table class="min-w-full divide-gray-200 bg-purple-1000">
                    <thead>
                        <tr>
                            <th class="pl-6 py-3 w-auto text-start text-base font-medium text-white tracking-wider align-middle">
                                ID
                            </th>
                            <th class="pl-6 py-3 w-auto text-start text-base font-medium text-white tracking-wider align-middle">
                                Jenis Barang
                            </th>
                            <th class="pl-6 py-3 w-auto text-start text-base font-medium text-white tracking-wider align-middle">
                                Merk
                            </th>
                            <th class="pl-6 py-3 w-auto text-start text-base font-medium text-white tracking-wider align-middle">
                                Tipe
                            </th>
                            <th class="pl-6 py-3 w-auto text-start text-base font-medium text-white tracking-wider align-middle">
                                Harga
                            </th>
                            <th class="pl-6 py-3 w-auto text-left text-base font-medium text-white tracking-wider align-middle">
                                Stok
                            </th>
                            <th class="pl-48 py-3 w-auto text-start text-base font-medium text-white tracking-wider align-middle">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y-2 divide-gray-200">
                        <!-- Data rows start -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-base font-semibold text-gray-700 align-middle">
                                LP001
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-base font-semibold text-gray-700 align-middle">
                                Laptop
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-base font-semibold text-gray-700 align-middle">
                                Asus
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-base font-semibold text-gray-700 align-middle">
                                VivoBook X555BP-BX921T
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-base font-semibold text-gray-700 align-middle">
                                2.695.000
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-base font-semibold text-gray-700 align-middle">
                                2
                            </td>
                            <td class="pl-32 py-4 align-middle">
                                <div class="flex flex-row">
                                    <button class="px-8 py-1 text-white bg-purple-900 rounded-full">
                                        Edit
                                    </button>
                                    <button class="px-6 py-1 ml-4 text-white bg-red-600 rounded-full">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-base font-semibold text-gray-700 align-middle">
                                LP001
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-base font-semibold text-gray-700 align-middle">
                                Laptop
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-base font-semibold text-gray-700 align-middle">
                                Asus
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-base font-semibold text-gray-700 align-middle">
                                VivoBook X555BP-BX921T
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-base font-semibold text-gray-700 align-middle">
                                2.695.000
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-base font-semibold text-gray-700 align-middle">
                                2
                            </td>
                            <td class="pl-32 py-4 align-middle">
                                <div class="flex flex-row">
                                    <button class="px-8 py-1 text-white bg-purple-900 rounded-full">
                                        Edit
                                    </button>
                                    <button class="px-6 py-1 ml-4 text-white bg-red-600 rounded-full">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Data rows end -->
                    </tbody>
                </table>
                <!-- Table end -->
            </div>
        </div>
    </div>
    <!-- Tabel container -->
</body>
