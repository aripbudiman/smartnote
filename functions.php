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

    $sql = "INSERT INTO catat VALUES('', '$tanggal', '$hari', $nama, $droping, $pf_droping, $tabungan, $pf_tabungan)";
    mysqli_query($koneksi, $sql);
    return mysqli_affected_rows($koneksi);
}
