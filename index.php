<?php
include 'views/header.php';

$catat = query("SELECT * FROM catat INNER JOIN petugas ON catat.nama = petugas.id_petugas");
$cards = query("SELECT * FROM petugas  INNER JOIN warna ON petugas.card_warna = warna.id_warna");
?>

<!-- batas kode php -->
<header class="flex justify-between lg:sticky lg:mx-auto h-16 px-3 py-2 mb-4 bg-white fixed z-10 top-0 right-0 left-0 shadow-sm shadow-slate-500 items-center">
    <h2 class="text-2xl font-inter text-hijau font-bold">Home Page</h2>
    <img src="images/arip.jpg" class="w-10 h-10 rounded-full">
</header>
<div class="card-wrapper px-4 mb-5 pt-20 swiper mySwiper lg:w-72">
    <div class="swiper-wrapper">
        <?php foreach ($cards as $card) : ?>
            <div class="swiper-slide mx-auto my-3 w-72 h-40 bg-<?= $card['warna'] ?> rounded-lg shadow-md shadow-black relative overflow-hidden">
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


<div class="p-4 max-w-md bg-white rounded-t-3xl border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
    <div class="flex justify-between items-center mb-4">
        <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Transaksi</h5>
        <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
            View all
        </a>
    </div>
    <div class="flow-root">
        <ul role="list" class="divide-y divide-gray-200 h-80 dark:divide-gray-700 overflow-scroll">
            <?php foreach ($catat as $c) : ?>
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img class="w-8 h-8 rounded-full" src="images/<?= $c['img']; ?>" alt="<?= $c['img']; ?>">
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                <?= $c['nama_petugas']; ?>
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                <?= $c['tanggal']; ?>
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            <a href="detail.php?id=<?= $c['id_proyeksi']; ?>"><?= rupiah($c['droping'] + $c['tabungan']); ?></a>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
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