<html>
<head>
    <link rel="stylesheet" href="resources/css/app.css">
</head>
<body>
    <div id="popup" class="hidden">
        <div id="popup-overlay" class="fixed inset-0 hidden items-center justify-center bg-black bg-opacity-50">
            <div id="popup-content" class="bg-white p-8 w-1/2 rounded-2xl">
                <h2 id="popup-form-title" class="font-extrabold mb-5">
                    Add New Karyawan
                </h2>
                <form id="popup-form"  action="/karyawan/add" method="POST" class="grid grid-cols-1 gap-5">
                    @csrf
                    <div class="col-span-1">
                        <label for="id_karyawan">ID Karyawan:</label>
                        <input type="text" id="id_karyawan" name="id_karyawan" class="w-full border border-gray-300 h-10 rounded p-1" required>
                    </div>
                    <div class="col-span-1">
                        <label for="nama_karyawan">Nama Karyawan:</label>
                        <input type="text" id="nama_karyawan" name="nama_karyawan" class="w-full border border-gray-300 h-10 rounded p-1" required>
                    </div>
                    <div class="col-span-1">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="w-full border border-gray-300 h-10 rounded p-1" required>
                    </div>
                    <div class="col-span-1">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" class="w-full border border-gray-300 h-10 rounded p-1" required>
                    </div>
                    <div class="col-span-1 flex justify-center">
                        <button id="popup-form-button" type="submit" class="w-1/3 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-2xl">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
