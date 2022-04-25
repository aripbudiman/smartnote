<?php
require 'functions.php';
require_once __DIR__ . '/vendor/autoload.php';
$dari = $_GET['dari'];
$sampai = $_GET['sampai'];
$hasil = pdf($dari, $sampai);
$total = query("SELECT sum(droping) AS totaldroping,sum(pf_droping) as totalpfdroping, sum(tabungan) as totaltabungan,sum(pf_tabungan) as totalpftabungan FROM catat WHERE tanggal BETWEEN '$dari' AND '$sampai'")[0];
$html = '<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    table{
        width:100%;
        border-collapse: collapse;
    }
    th , td{
        border: 1px solid #111827;
        padding:5px 5px 5px 5px;
        text-align:center;
    }
    .judul{
        text-align:center;
    }
    .total{
        text-align:center;
        font-weight:bold;
    }
    </style>
    
</head>

<body class="bg-mab lg:w-1/3">
<h2 class="judul">Laporan Proyeksi Droping Cabang Manonjaya Periode: ' . formatTanggal($dari) . ' s/d ' . formatTanggal($sampai) . '</h2>
<table class="px-3">
<thead>
    <tr>
        <th class="border-hitam">No</th>
        <th class="border-hitam">Hari</th>
        <th class="border-hitam">Droping</th>
        <th class="border-hitam">PF</th>
        <th class="border-hitam">Tabungan</th>
        <th class="border-hitam">PF</th>
        <th class="border-hitam">Total</th>
        <th class="border-hitam">PF</th>
    </tr>
</thead>
<tbody>';
$i = 1;
foreach ($hasil as $t) :
    $html .= '<tr>
                    <td class="border-hitam">' . $i++ . '</td>
                    <td class="border-hitam">' . $t["hari"]  . '</td>
                    <td class="border-hitam">' . rupiah($t["droping"]) . '</td>
                    <td class="border-hitam">' . rupiah($t["pf_droping"]) . '</td>
                    <td class="border-hitam">' . rupiah($t["tabungan"])  . '</td>
                    <td class="border-hitam">' . rupiah($t["pf_tabungan"]) . '</td>
                    <td class="border-hitam">' . rupiah($t["droping"] + $t["tabungan"]) . '</td>
                    <td class="border-hitam">' . rupiah($t["pf_droping"] + $t["pf_tabungan"]) . '</td>
                </tr>';
endforeach;
$html .= '</tbody>
<tfoot>
            <tr>
                <td class="border-hitam total" colspan="2">Total</td>
                <td class="border-hitam total">' . rupiah($total['totaldroping']) . '</td>
                <td class="border-hitam total">' . rupiah($total['totalpfdroping']) . '</td>
                <td class="border-hitam total">' . rupiah($total['totaltabungan']) . '</td>
                <td class="border-hitam total">' . rupiah($total['totalpftabungan']) . '</td>
                <td class="border-hitam total">' . rupiah($total['totaldroping'] + $total['totaltabungan']) . '</td>
                <td class="border-hitam total">' . rupiah($total['totalpfdroping'] + $total['totalpftabungan']) . '</td>
            </tr>
        </tfoot>
    </table>


</div>
</body>
</div>
</html>
';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();
