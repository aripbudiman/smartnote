<?php
include 'views/header.php';

if (isset($_POST['tampilkan'])) {
    $dari = $_POST['dari'];
    $sampai = $_POST['sampai'];
    $tampil = query("SELECT hari,SUM(droping) AS droping,
    sum(pf_droping) as pf_droping, SUM(tabungan) AS tabungan, 
    sum(pf_tabungan) as pf_tabungan FROM catat WHERE tanggal
     BETWEEN '$dari' AND '$sampai' GROUP BY hari desc");
    $total = query("SELECT sum(droping) AS totaldroping,
    sum(pf_droping) as totalpfdroping, 
    sum(tabungan) as totaltabungan,
    sum(pf_tabungan) as totalpftabungan FROM catat WHERE tanggal
     BETWEEN '$dari' AND '$sampai'")[0];
}
if (isset($_POST['pdf'])) {
    $dari = $_POST['dari'];
    $sampai = $_POST['sampai'];
    echo "<script>
    document.location.href='pdf.php?dari=$dari&&sampai=$sampai'
    </script>";
}


?>

<div>
    <div>
        <h1 class="text-center text-2xl font-bold py-3">Laporan proyeksi cabang manonjaya</h1>
    </div>
    <form method="POST">
        <div class=" flex flex-wrap justify-around px-3">
            <label for="dari">Tanggal</label>
            <input type="date" name="dari" id="dari" class="h-7 w-24 rounded-md outline-none">
            <label for="sampai">s/d</label>
            <input type="date" name="sampai" id="sampai" class="h-7 w-24 rounded-md outline-none">
        </div>
        <div class="flex flex-wrap px-3 py-3">
            <button class="mx-3 p-3 bg-kuning h-10 item leading-4 rounded-md text-white font-semibold" type="submit" name="tampilkan">Tampilkan</button>
            <button class="mx-3 p-3 bg-hijau h-10 item leading-4 rounded-md text-white font-semibold" type="submit" name="pdf">PDF</button>

        </div>
    </form>
    <div>
        <?php
        if (isset($dari)) {
            echo 'Periode Tanggal: ' . formatTanggal($dari) . ' s/d ' . formatTanggal($sampai);
        } else {
            return false;
        }
        ?>
    </div>
    <table class="px-3">
        <thead>
            <tr>
                <th class="border-[1px] border-hitam">No</th>
                <th class="border-[1px] border-hitam">Hari</th>
                <th class="border-[1px] border-hitam">Droping</th>
                <th class="border-[1px] border-hitam">PF</th>
                <th class="border-[1px] border-hitam">Tabungan</th>
                <th class="border-[1px] border-hitam">PF</th>
                <th class="border-[1px] border-hitam">Total</th>
                <th class="border-[1px] border-hitam">PF</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($tampil as $t) : ?>
                <tr>
                    <td class="border-[1px] border-hitam"><?= $i++; ?></td>
                    <td class="border-[1px] border-hitam"><?= $t['hari']; ?></td>
                    <td class="border-[1px] border-hitam"><?= rupiah($t['droping']); ?></td>
                    <td class="border-[1px] border-hitam"><?= rupiah($t['pf_droping']); ?></td>
                    <td class="border-[1px] border-hitam"><?= rupiah($t['tabungan']); ?></td>
                    <td class="border-[1px] border-hitam"><?= rupiah($t['pf_tabungan']); ?></td>
                    <td class="border-[1px] border-hitam"><?= rupiah($t['droping'] + $t['tabungan']); ?></td>
                    <td class="border-[1px] border-hitam"><?= rupiah($t['pf_droping'] + $t['pf_tabungan']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td class="border-[1px] border-hitam" colspan="2">Total</td>
                <td class="border-[1px] border-hitam"><?= rupiah($total['totaldroping']); ?></td>
                <td class="border-[1px] border-hitam"><?= rupiah($total['totalpfdroping']); ?></td>
                <td class="border-[1px] border-hitam"><?= rupiah($total['totaltabungan']); ?></td>
                <td class="border-[1px] border-hitam"><?= rupiah($total['totalpftabungan']); ?></td>
                <td class="border-[1px] border-hitam"><?= rupiah($total['totaldroping'] + $total['totaltabungan']); ?></td>
                <td class="border-[1px] border-hitam"><?= rupiah($total['totalpfdroping'] + $total['totalpftabungan']); ?></td>
            </tr>
        </tfoot>
    </table>

</div>