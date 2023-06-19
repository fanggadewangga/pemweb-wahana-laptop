<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>

    @include('customer.popupcustomer')
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
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-400 text-base hover:text-purple-900 hover:font-bold">Dashboard</a>
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
                <button type="button" class="flex items-center ml-4">
                    <img src="{{url('/assets/logout.png')}}" alt="Logout" class="w-8 h-8">
                </button>
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
                        <h2 class="font-bold text-l text-purple-900 ml-6">Customer</h2>
                    </div>

                    <div class="flex flex-row items-center">
                        <!-- Search field start -->
                        <div class="flex items-center justify-center">
                            <div class="items-center">
                                <form action="/customer/search" method="GET"> <!-- Formulir pencarian dengan metode GET -->
                                    <input type="text" name="keyword" placeholder="Search..." class="w-96 py-1.5 pl-10 pr-8 rounded-full bg-gray-200 focus:outline-none" />
                                </form>
                            </div>
                        </div>
                        <!-- Search field end -->


                        <!-- Button add start -->
                        <button  id="openPopup" onclick="showPopupForm()"  class="h-8 ps-11 pe-11 items-center mt-2 mb-2 ml-4 mr-4 rounded-full bg-purple-800 text-white font-semibold">
                            Add
                        </button>
                        <!-- Button add end -->
                    </div>

                </div>
                <!-- Table top bar end -->

                <!-- Table start -->
                <table class="min-w-full divide-gray-200 bg-purple-950">
                    <thead>
                        <tr>
                            <th class="px-8 py- w-auto text-start text-base font-medium text-white tracking-wider align-middle">
                                ID
                            </th>
                            <th class="px-12 py-3 w-auto text-start text-base font-medium text-white tracking-wider align-middle">
                                Nama
                            </th>
                            <th class="px-12 py-3 w-auto text-start text-base font-medium text-white tracking-wider align-middle">
                                Nomor Telepon
                            </th>
                            <th class="pl-48 py-3 w-auto text-start text-base font-medium text-white tracking-wider align-middle">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y-2 divide-gray-200">
                        <!-- Data rows start -->
                        @foreach($customer as $customer)
                        <tr>
                            <td class="px-8 py-4 whitespace-nowrap text-base font-semibold text-gray-700 align-middle">
                                {{ $customer->id_customer }}
                            </td>
                            <td class="px-12 py-4 whitespace-nowrap text-base font-semibold text-gray-700 align-middle">
                                {{ $customer->nama_customer }}
                            </td>
                            <td class="px-12 py-4 whitespace-nowrap text-base font-semibold text-gray-700 align-middle">
                                {{ $customer->nomor_telepon }}
                            </td>
                            <td class="pl-32 py-4 align-middle">
                                <div class="flex flex-row">
                                    <button data-id="{{ $customer->id_customer }}" id="open-popup-edit-{{ $customer->id_customer }}" class="px-8 py-1 text-white bg-purple-900 rounded-full">
                                        Edit
                                    </button>
                                    <form action="{{ url('/customer/delete', $customer->id_customer) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-6 py-1 ml-4 text-white bg-red-600 rounded-full">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <script>
                            const openPopupEditButton{{$customer->id_customer }} = document.getElementById("open-popup-edit-{{ $customer->id_customer}}");
                            openPopupEditButton{{ $customer->id_customer }}.addEventListener("click", function () {
                                const id = this.dataset.id;
                                fetch("/get-data-customer/" + id)
                                    .then((response) => response.json())
                                    .then((data) => {
                                        const id_customer = document.getElementById("id_customer")
                                        id_customer.value = data.id_customer;
                                        id_customer.readOnly = true; 

                                        document.getElementById("popup-form").action = "/customer/update/{id_customer}"
                                        document.getElementById("popup-form-title").textContent = "Edit Customer"
                                        document.getElementById("popup-form-button").textContent = "Update"

                                        document.getElementById("id_customer").value = data.id_customer;
                                        document.getElementById("nama_customer").value = data.nama_customer;
                                        document.getElementById("nomor_telepon").value = data.nomor_telepon;
                                        showPopupForm();
                                    })
                                    .catch((error) => {
                                        console.error("Terjadi kesalahan:", error);
                                    });
                            });
                        </script>
                        @endforeach
                        <!-- Data rows end -->
                    </tbody>
                </table>
                <!-- Table end -->
            </div>
        </div>
    </div>
    <!-- Tabel container -->
</body>
<script src="{{asset('js/popupForm.js')}}"></script>

</html>