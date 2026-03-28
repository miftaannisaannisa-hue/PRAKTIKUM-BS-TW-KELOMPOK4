<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama  = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);

    // Simulasi penyimpanan atau validasi
    if (!empty($nama) && !empty($email)) {
        $status = "success";
        $msg = "Halo $nama, data kamu berhasil diterima!";
    } else {
        $status = "danger";
        $msg = "Mohon isi semua data dengan benar.";
    }
}
?>