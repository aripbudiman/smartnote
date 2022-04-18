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

<<<<<<< HEAD
    $sql = "INSERT INTO catat VALUES('', '$tanggal', '$hari', $nama, $droping, $pf_droping, $tabungan, $pf_tabungan)";
    mysqli_query($koneksi, $sql);
=======
    $query = "INSERT INTO catat VALUES('', '$tanggal', '$hari', $nama, $droping, $pf_droping, $tabungan, $pf_tabungan,current_timestamp())";
    mysqli_query($koneksi, $query);
>>>>>>> aaf2d9b0c7e037a217319cac927284f6b50511da
    return mysqli_affected_rows($koneksi);
}
