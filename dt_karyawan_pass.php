<?php
session_start();
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $koneksi = mysqli_connect("localhost", "root", "", "karyawansi");

    $id_karyawan = $_POST['id_karyawan'];
    $password = $_POST['password'];

    $query = "UPDATE tb_karyawan SET password='$password' WHERE id_karyawan='$id_karyawan'";

    if (mysqli_query($koneksi, $query)) {
        echo "<div align='center'>Password berhasil diupdate <a href='datakaryawanupdate.php'>back</a></div>";
    } else {
        echo "ERROR: Tidak bisa mengeksekusi perintah $query. " . mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
}
?>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       