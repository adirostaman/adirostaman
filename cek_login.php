<?php

// mengaktifkan session pada php 
session_start();

//menghubungkan php dgn koneksi database
include './config/config.php';

//menangkap data yg dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

//menyeleksi data user dengan username dan password yg sesuai
$login = mysqli_query($conn,"select * from user where username='$username' and password='$password'");

//menghitun jumlah data yg ditentukan
$cek = mysqli_num_rows($login);

//cek apakah username dan password di temukan pada database
if($cek > 0 ){

    $data = mysqli_fetch_assoc($login);

    //cek jiga user sebagai admin
    if($data['level']=="1"){
        //buat session jika user login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "1";
        //alihkan ke halaman dashboard
        header("location:admin/index.php");

    }else if($data['level']=="2"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "2";
        header("location:petugas/index.php");
    }else if($data['level']=="3"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "3";
        header("location:peminjam/index.php");
  }
    else{
        header("location:index.php?pesan=gagal");
        echo alert("Hello! I am an alert box!!");
        }
    }else{
        header("location:index.php?pesan=gagal");
        }

?>