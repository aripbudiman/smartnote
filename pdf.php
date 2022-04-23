<?php

require_once __DIR__ . '/vendor/autoload.php';

$dari = $_POST['dari'];
$sampai = $_POST['sampai'];
echo $dari;
echo $sampai;

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($dari);
$mpdf->Output();
