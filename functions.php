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


function update($data)
{
    global $koneksi;
    $id = $data['id_petugas'];
    $nik = $data['nik'];
    $nama_petugas = $data['nama_petugas'];
    $foto = $data['img'];
    $warna = $data['card_warna'];

    $result = "UPDATE petugas SET nik='$nik', nama_petugas='$nama_petugas', img='$foto',card_warna=$warna, creat_at=current_timestamp() WHERE id_petugas=$id";

    mysqli_query($koneksi, $result);

    return mysqli_affected_rows($koneksi);
}
