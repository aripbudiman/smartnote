<?php
include 'views/header.php';

$catat = query("SELECT * FROM catat INNER JOIN petugas ON catat.nama = petugas.id_petugas");
$cards = query("SELECT * FROM petugas  INNER JOIN warna ON petugas.card_warna = warna.id_warna");
?>

<!-- batas kode php -->

<div class="card-wrapper px-10 mb-5 swiper mySwiper pt-20 lg:w-72">
    <div class="swiper-wrapper">
        <?php foreach ($cards as $card) : ?>
            <div class="swiper-slide mx-auto my-3 w-70 h-40 bg-<?= $card['warna'] ?> rounded-lg shadow-md shadow-black relative overflow-hidden">
                <h2 class="font-poppins font-bold pt-3 pl-5 text-left text-white text-3xl">BAIK</h2>
                <h3 class="text-white z-10 text-lg absolute left-5 bottom-18 text-shadow"><?= $card['nik']; ?></h3>
                <h3 class="text-white z-10 text-lg absolute left-5 bottom-12 text-shadow"><?= $card['nama_petugas']; ?></h3>
                <h3 class="text-white z-10 text-sm absolute left-5 bottom-2 text-shadow"><?= $card['creat_at']; ?></h3>
                <img src="images/Artboard 68.png" class="absolute opacity-30 right-0 left-0 bottom-0 top-0">
                <img src="images/chip2.png" class="w-16 absolute top-5 right-5">
                <img src="images/visa.png" class="w-20 absolute bottom-4 right-5">
            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="flex justify-center flex-col">
    <h2 class="text-center text-2xl font-bold font-inter">Riwayat Transaksi</h2>
    <div class="max-h-96 overflow-scroll">
        <div class="px-5">
            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                <?php foreach ($catat as $c) : ?>
                    <a href="detail.php?id=<?= $c['id_proyeksi']; ?>">
                        <li class="py-3 sm:py-4 border-b-2 border-solid border-hitam/10">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-full" src="images/<?= $c['img']; ?>" alt="">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        <?= $c['nama_petugas']; ?>
                                    </p>
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        <?= formatTanggal($c['tanggal']); ?>
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    <?= rupiah($c['droping'] + $c['tabungan']); ?>
                                </div>
                            </div>
                        </li>
                    </a>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 50,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
<?php include 'views/footer.php'; ?>