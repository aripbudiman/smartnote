<?php
include 'views/header.php';
$id = $_GET['id'];
$warna = query("SELECT * FROM warna");
$user = query("SELECT * FROM petugas JOIN warna ON petugas.card_warna = warna.id_warna WHERE id_petugas =$id")[0];
if (isset($_POST['update'])) {
    $foto = $_FILES['img']['name'];
    $file_temp = $_FILES['img']['tmp_name'];
    move_uploaded_file($file_temp, 'images/' . $foto);
    $id = $_POST['id_petugas'];
    $nik = $_POST['nik'];
    $namapetugas = $_POST['nama_petugas'];
    $warna = $_POST['card_warna'];
    $sql = "UPDATE petugas SET nik='$nik', nama_petugas='$namapetugas', img='$foto', card_warna=$warna WHERE id_petugas=$id ";

    $result = mysqli_query($koneksi, $sql);
    if (mysqli_affected_rows($koneksi) > 0) {
        echo "<script>
        alert('Data berhasil di update')
        document.location.href='edituser.php'
        </script>";
    } else {
        echo "<script>
        alert('Data gagal di update')
        mysqli_error($koneksi)
        </script>";
    }
}
?>
<div class="bg-kuning h-screen">
    <form method="POST" enctype="multipart/form-data">
        <div class="h-16 bg-white shadow-sm shadow-black/40 flex items-center">
            <h1 class="text-3xl text-hijau pl-3 font-bold font-inter">Edit User</h1>
        </div>
        <div class="mx-4 mt-5">
            <div>
                <img src="images/<?= $user['img']; ?>" alt="<?= $user['img']; ?>" class="w-32 mx-auto rounded-md border-2 border-white bg-cover">
            </div>
            <div>
                <input type="hidden" name="id_petugas" id="small-input" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $user['id_petugas']; ?>">
            </div>
            <div>
                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">NIK</label>
                <input type="text" name="nik" id="small-input" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $user['nik']; ?>">
            </div>
            <div>
                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Petugas</label>
                <input type="text" name="nama_petugas" id="small-input" class="block p-2 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?= $user['nama_petugas']; ?>">
            </div>
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Foto</label>
                <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" name="img" id="user_avatar" type="file" value="<?= $user['img']; ?>">
            </div>
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pilih warna kartu</label>
            <select id="countries" name="card_warna" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <?php foreach ($warna as $w) : ?>
                    <option value="<?= $w['id_warna']; ?>"><?= $w['warna']; ?></option>
                <?php endforeach; ?>
            </select>
            <div>
                <button type="submit" name="update" class="p-2 bg-hijau rounded my-3 w-40">
                    Proses
                </button>
                <a href="edituser.php" class="p-2 bg-hitam text-white rounded my-3 w-40">Kembali</a>
            </div>
        </div>
    </form>
</div>