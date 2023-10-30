<?php
session_start();
session_destroy();
    // jika user belum login, kembali ke halaman login
    header("Location: ../index.php");
    exit();

?>