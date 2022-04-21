<?php
include 'views/header.php';

$petugas = query("SELECT * FROM petugas JOIN warna ON petugas.card_warna = warna.id_warna");


?>


<div>
    <div>
        <h1 class="text-center text-hijau text-3xl py-5 font-bold fornt-inter">Data Karyawan</h1>
    </div>
    <div class="mx-4">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg rounded-t-xl">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            NIK
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            card color
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($petugas as $p) : ?>
                        <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                <?= $p['nik']; ?>
                            </th>
                            <td class="px-6 py-4">
                                <?= $p['nama_petugas']; ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $p['warna']; ?>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="editpetugas.php?id=<?= $p['id_petugas']; ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>





<?php include 'views/footer.php'; ?>