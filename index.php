<?php include 'views/header.php'; ?>


<header class="flex justify-between h-16 px-3 py-2 mb-4 bg-white fixed z-10 top-0 right-0 left-0 shadow-sm shadow-slate-500 items-center">
    <h2 class="text-2xl font-poppins text-hijau font-bold">Home Page</h2>
    <img src="images/arip.jpg" class="w-10 h-10 rounded-full">
</header>
<div class="card-wrapper px-4 mb-5 pt-20">
    <div class="mx-auto card w-72 h-40 bg-hijau rounded-lg shadow-md shadow-black relative overflow-hidden">
        <h2 class="font-poppins font-bold pt-3 pl-5 text-left text-white text-3xl">BANK</h2>
        <h3 class="text-white z-10 text-lg font-semibold absolute left-5 bottom-18">518.2017.0306</h3>
        <h3 class="text-white z-10 text-lg font-semibold absolute left-5 bottom-12">Muhamad Arip Budiman</h3>
        <img src="images/Artboard 68.png" class="absolute opacity-30 right-0 left-0 bottom-0 top-0">
        <img src="images/chip2.png" class="w-16 absolute top-5 right-5">
        <img src="images/visa.png" class="w-20 absolute bottom-4 right-5">
    </div>
</div>


<div class="p-4 max-w-md bg-white rounded-3xl border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
    <div class="flex justify-between items-center mb-4">
        <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Transaksi</h5>
        <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
            View all
        </a>
    </div>
    <div class="flow-root">
        <ul role="list" class="divide-y divide-gray-200 h-full dark:divide-gray-700 overflow-scroll">
            <?php for ($x = 0; $x < 100; $x++) : ?>
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img class="w-8 h-8 rounded-full" src="images/arip.jpg" alt="Neil image">
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                Muhamad arip budiman
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                22 Juni 1999
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            <a href="detail.php?id=<?= $x; ?>">Rp 120.000.000</a>
                        </div>
                    </div>
                </li>
            <?php endfor; ?>
        </ul>
    </div>
</div>

<?php include 'views/footer.php'; ?>