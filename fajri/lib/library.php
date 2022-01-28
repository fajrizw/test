<?php
session_start();

function base_url() {
        return" http://localhost/pwpb";

}

function flash($tipe, $pesan = '') {
        if (empty($pesan)) {
                $pesan = @$_SESSION[$tipe];
                unset($_SESSION[$tipe]);
                return $pesan;

        } else {
                $_SESSION[$tipe] = $pesan;

        }

}

function cek_login() {
        $username = @$_SESSION['username'];
        $level = @$_SESSION['level'];

        if (empty($username) AND !empty($level)) {
                header("location: login.php");

}
}


function sudah_login() {
        $username = @$_SESSION['username'];
        $level = @$_SESSION['level'];

        if (empty($username) AND !empty($level)) {
                header("location: index.php");

        }
}

$host = 'localhost';
$user = 'root';
$pass = '' ;
$db = 'pwpb' ;

$mysqli = mysqli_connect($host, $user, $pass, $db) 
        or die('Tidak dapat koneksi ke database');
?>