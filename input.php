<?php include 'views/header.php'; ?>
<div class="p-4 h-screen">
    <h2 class="text-2xl text-center mb-6 font-poppins font-bold text-hijau underline">Input Proyeksi</h2>
    <form class="mx-4">
        <div class="relative z-0 mb-6 w-full group">
            <input type="date" name="tanggal" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-hijau focus:outline-none focus:ring-0 focus:border-hijau peer">
            <label for="tanggal" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-hijau peer-focus:dark:text-hijau peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal</label>
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <label for="hari" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-hijau peer-focus:dark:text-hijau peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Hari</label>
            <select id="hari" name="hari" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-hijau focus:outline-none focus:ring-0 focus:border-hijau peer">
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
            </select>
        </div>
        <div class="relative z-0 mb-6 w-full group">
            <label for="nama" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-hijau peer-focus:dark:text-hijau peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
            <select id="countries" name="nama" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-hijau focus:outline-none focus:ring-0 focus:border-hijau peer">
                <option value=""></option>
                <option>United States</option>
            </select>
        </div>
        <div class="grid xl:grid-cols-2 xl:gap-6">
            <div class="relative z-0 mb-6 w-full group">
                <input type="text" name="droping" id="droping" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-hijau focus:outline-none focus:ring-0 focus:border-hijau peer" placeholder=" " required="">
                <label for="droping" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-hijau peer-focus:dark:text-hijau peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Droping</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="text" name="pf_droping" id="pf_droping" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-hijau focus:outline-none focus:ring-0 focus:border-hijau peer" placeholder=" " required="">
                <label for="pf_droping" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-hijau peer-focus:dark:text-hijau peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Droping PF</label>
            </div>
            <div class="grid xl:grid-cols-2 xl:gap-6">
                <div class="relative z-0 mb-6 w-full group">
                    <input type="text" name="tabungan" id="tabungan" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-hijau focus:outline-none focus:ring-0 focus:border-hijau peer" placeholder=" " required="">
                    <label for="tabungan" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-hijau peer-focus:dark:text-hijau peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">UMB Tabungan</label>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="text" name="pf_tabungan" id="pf_tabungan" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-hijau focus:outline-none focus:ring-0 focus:border-hijau peer" placeholder=" " required="">
                    <label for="pf_tabungan" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-hijau peer-focus:dark:text-hijau peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">UMB PF</label>
                </div>
            </div>

        </div>
        <button type="submit" name="kirim" class="text-white bg-hijau hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
    </form>
</div>

<?php include 'views/footer.php' ?>