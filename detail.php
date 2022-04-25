<?php
include 'views/header.php';

$id = $_GET['id'];

$detail = query("SELECT * FROM catat INNER JOIN petugas ON catat.nama = petugas.id_petugas WHERE id_proyeksi=$id")[0];
?>

<div class="px-3 pt-20">

    <div class="p-4 max-w-sm bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-4 text-xl text-center font-medium text-gray-500 dark:text-gray-400">Detail</h5>
        <div class="flex items-baseline text-gray-900 dark:text-white justify-center">
            <span class="text-3xl font-semibold"></span>
            <span class="text-2xl font-extrabold tracking-tight"><?= $detail['nama_petugas']; ?></span>
            <span class="ml-1 text-xl font-normal text-gray-500 dark:text-gray-400"></span>
        </div>

        <ul role="list" class="my-7 space-y-5">
            <li class="flex space-x-3">
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400"><i class="fa-solid fa-calendar-day"></i></span>
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Tanggal</span>
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400"><?= $detail['hari']; ?>, <?= formatTanggal($detail['tanggal']); ?>
                </span>
            </li>
            <li class="flex space-x-3">
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400"><i class="fa-solid fa-money-bill-1"></i></span>
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Droping</span>
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400"><?= rupiah($detail['droping']); ?></span>
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400"><?= $detail['pf_droping']; ?>PF</span>
            </li>
            <li class="flex space-x-3 border-b-2 border-slate-500 pb-4">
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400"><i class="fa-solid fa-money-bill-1"></i></span>
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Tabungan</span>
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400"><?= rupiah($detail['tabungan']); ?></span>
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400"><?= $detail['pf_tabungan']; ?>PF</span>
            </li>
            <li class="flex space-x-3">
                <span class="text-base leading-tight text-gray-500 dark:text-gray-400 font-bold"><i class="fa-solid fa-money-bill-1"></i></span>
                <span class="text-base leading-tight text-gray-500 dark:text-gray-400 font-bold">GrandTotal</span>
                <span class="text-base leading-tight text-gray-500 dark:text-gray-400 font-bold"><?= rupiah($detail['droping'] + $detail['tabungan']); ?></span>
                <span class="text-base leading-tight text-gray-500 dark:text-gray-400 font-bold"><?= $detail['pf_droping'] + $detail['pf_tabungan']; ?>PF</span>
            </li>
        </ul>
    </div>
    <div class="px-3 py-4 text-right">
        <a href="index.php"><i class="fa-solid fa-angles-left"></i> Kembali ke menu awal</a>
    </div>
</div>