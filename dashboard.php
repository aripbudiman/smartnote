<?php
include 'views/header.php';
$hari = query("SELECT SUM(droping) as droping, pf_droping, SUM(tabungan) as tabungan, pf_tabungan, hari FROM catat GROUP BY hari DESC");
?>
<div class="lg:w-2/1">

    <div class="relative top-0 left-0 right-0 h-16 bg-white flex items-center shadow-sm shadow-slate-500">
        <h1 class="m-2 pl-3 text-hijau text-3xl font-inter font-bold">Statistik</h1>
    </div>
    <div class="p-4 h-full">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Hari
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Droping
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pf
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tabungan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pf
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hari as $h) : ?>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                <?= $h['hari']; ?>
                            </th>
                            <td class="px-6 py-4">
                                <?= rupiah($h['droping']); ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $h['pf_droping']; ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $h['tabungan']; ?>
                            </td>
                            <td class="px-6 py-4">
                                <?= $h['pf_tabungan']; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="shadow-lg rounded-lg overflow-hidden mt-5">
            <div class="py-3 px-5 bg-gray-50">Statistik Hari</div>
            <canvas class="p-10" id="chartDoughnut"></canvas>
        </div>

        <!-- Required chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- Chart doughnut -->
        <?php
        $senin = query("SELECT SUM(droping) AS droping FROM catat WHERE hari='Senin'")[0]['droping'];
        $selasa = query("SELECT SUM(droping) AS droping FROM catat WHERE hari='Selasa'")[0]['droping'];
        $rabu = query("SELECT SUM(droping) AS droping FROM catat WHERE hari='Rabu'")[0]['droping'];
        $kamis = query("SELECT SUM(droping) AS droping FROM catat WHERE hari='Kamis'")[0]['droping'];

        ?>
        <script>
            const dataDoughnut = {
                labels: ["Senin", "Selasa", "Rabu", "Kamis"],
                datasets: [{
                    label: "My First Dataset",
                    data: [
                        <?= $senin; ?>,
                        <?= $selasa; ?>,
                        <?= $rabu; ?>,
                        <?= $kamis; ?>,
                    ],
                    backgroundColor: [
                        "rgb(133, 105, 241)",
                        "rgb(164, 101, 241)",
                        "rgb(101, 143, 241)",
                        "rgb(01, 143, 241)",
                    ],
                    hoverOffset: 4,
                }, ],
            };

            const configDoughnut = {
                type: "doughnut",
                data: dataDoughnut,
                options: {},
            };

            var chartBar = new Chart(
                document.getElementById("chartDoughnut"),
                configDoughnut
            );
        </script>


        <!-- radar -->
        <div class="shadow-lg rounded-lg overflow-hidden mt-5 mb-7">
            <div class="py-3 px-5 bg-gray-50">Radar chart</div>
            <canvas class="p-10" id="chartRadar"></canvas>
        </div>

        <!-- Required chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- Chart radar -->
        <script>
            const dataRadar = {
                labels: [
                    "Eating",
                    "Drinking",
                    "Sleeping",
                    "Designing",
                    "Coding",
                    "Cycling",
                    "Running",
                ],
                datasets: [{
                        label: "My First Dataset",
                        data: [65, 59, 90, 81, 56, 55, 40, ],
                        fill: true,
                        backgroundColor: "rgba(133, 105, 241, 0.2)",
                        borderColor: "rgb(133, 105, 241)",
                        pointBackgroundColor: "rgb(133, 105, 241)",
                        pointBorderColor: "#fff",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgb(133, 105, 241)",
                    },
                    {
                        label: "My Second Dataset",
                        data: [28, 48, 40, 19, 96, 27, 100],
                        fill: true,
                        backgroundColor: "rgba(54, 162, 235, 0.2)",
                        borderColor: "rgb(54, 162, 235)",
                        pointBackgroundColor: "rgb(54, 162, 235)",
                        pointBorderColor: "#fff",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgb(54, 162, 235)",
                    },
                ],
            };

            const configRadarChart = {
                type: "radar",
                data: dataRadar,
                options: {},
            };

            var chartBar = new Chart(
                document.getElementById("chartRadar"),
                configRadarChart
            );
        </script>

    </div>
</div>
<?php include 'views/footer.php' ?>