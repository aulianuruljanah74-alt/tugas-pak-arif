<?php
session_start();
//kosongkan semua data session
session_unset();
//hancurkan session yang tersimpan di server
session_destroy();

//arahkan kembali pengguna ke halaman form login 
header("Location: login.php");
exit;
?>