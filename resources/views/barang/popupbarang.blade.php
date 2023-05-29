<html>
<head>
    <link rel="stylesheet" href="resources/css/app.css">
</head>
<body>
    <div id="popup" class="hidden">
        <div id="popup-overlay" class="fixed inset-0 hidden items-center justify-center bg-black bg-opacity-50">
            <div id="popup-content" class="bg-white p-8 w-1/2 rounded-2xl">
                <h2 id="popup-form-title" class="font-extrabold mb-5">
                    Add New Barang
                </h2>
                <form id="popup-form"  action="/barang/add" method="POST" class="grid grid-cols-2 gap-5">
                    @csrf
                    <div class="col-span-1">
                        <label for="id_barang">ID Barang:</label>
                        <input type="text" id="id_barang" name="id_barang" class="w-full border border-gray-300 h-10 rounded p-1" required>
                    </div>
                    <div class="col-span-1">
                        <label for="tanggal_masuk_gudang">Tanggal Masuk Gudang:</label>
                        <input type="date" id="tanggal_masuk_gudang" name="tanggal_masuk_gudang" class="w-full border border-gray-300 h-10 rounded p-1" required>
                    </div>
                    <div class="col-span-1">
                        <label for="jenis_barang">Jenis Barang:</label>
                        <input type="text" id="jenis_barang" name="jenis_barang" class="w-full border border-gray-300 h-10 rounded p-1" required>
                    </div>
                    <div class="col-span-1">
                        <label for="garansi">Garansi:</label>
                        <input type="text" id="garansi" name="garansi" class="w-full border border-gray-300 h-10 rounded p-1" required>
                    </div>
                    <div class="col-span-1">
                        <label for="merk_barang">Merk Barang:</label>
                        <input type="text" id="merk_barang" name="merk_barang" class="w-full border border-gray-300 h-10 rounded p-1" required>
                    </div>
                    <div class="col-span-1">
                        <label for="stok">Stok:</label>
                        <input type="number" id="stok" name="stok" class="w-full border border-gray-300 h-10 rounded p-1" required>
                    </div>
                    <div class="col-span-1">
                        <label for="tipe_barang">Tipe Barang:</label>
                        <input type="text" id="tipe_barang" name="tipe_barang" class="w-full border border-gray-300 h-10 rounded p-1" required>
                    </div>
                    <div class="col-span-1">
                        <label for="harga_satuan">Harga Satuan:</label>
                        <input type="number" id="harga_satuan" name="harga_satuan" class="w-full border border-gray-300 h-10 rounded p-1" required>
                    </div>
                    <div class="col-span-2">
                        <label for="foto_barang">URL Gambar:</label>
                        <input type="text" id="foto_barang" name="foto_barang" class="w-full border border-gray-300 h-10 rounded p-1" required>
                    </div>
                    <div class="col-span-2">
                        <label for="spesifikasi">Spesifikasi:</label>
                        <input type="text" id="spesifikasi" name="spesifikasi" class="w-full border border-gray-300 h-10 rounded p-1" required>
                    </div>
                    <div class="col-span-2">
                        <label for="kelengkapan">Kelengkapan:</label>
                        <input type="text" id="kelengkapan" name="kelengkapan" class="w-full border border-gray-300 h-10 rounded p-1" required>
                    </div>
                    <div class="col-span-2 flex justify-center">
                        <button id="popup-form-button" type="submit" class="w-1/3 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-2xl">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
