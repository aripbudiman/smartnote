<?php
$koneksi = mysqli_connect("localhost", "root", "", "proyeksi");



function query($data)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $data);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function rupiah($uang)
{
    $hasil_rupiah = number_format($uang, 0, ',', '.');
    return $hasil_rupiah;
}

function kirimproyeksi($data)
{
    global $koneksi;
    $tanggal = $data['tanggal'];
    $hari = $data['hari'];
    $nama = $data['nama'];
    $droping = $data['droping'];
    $pf_droping = $data['pf_droping'];
    $tabungan = $data['tabungan'];
    $pf_tabungan = $data['pf_tabungan'];


    $query = "INSERT INTO catat VALUES('', '$tanggal', '$hari', $nama, $droping, $pf_droping, $tabungan, $pf_tabungan,current_timestamp())";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function formatTanggal($date)
{
    // ubah string menjadi format tanggal
    return date('d-m-Y', strtotime($date));
}

function pdf($dari, $sampai)
{
    global $koneksi;
    $sql = "SELECT hari,SUM(droping) AS droping,sum(pf_droping) as pf_droping, SUM(tabungan) AS tabungan, sum(pf_tabungan) as pf_tabungan FROM catat WHERE tanggal BETWEEN '$dari' AND '$sampai' GROUP BY hari desc";
    $query = mysqli_query($koneksi, $sql);
    $rows = [];
    while ($row = mysqli_fetch_assoc($query)) {
        $rows[] = $row;
    }
    return $rows;
}
