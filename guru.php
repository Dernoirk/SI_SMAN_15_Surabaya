<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <title>Berhasil Login</title>
    <style>
        body {
        margin: 0;
        font-family: "Lato", sans-serif;
        }

        .sidebar {
        margin: 0;
        padding: 0;
        width: 200px;
        background-color: #f1f1f1;
        position: fixed;
        height: 100%;
        overflow: auto;
        }

        .sidebar a {
        display: block;
        color: black;
        padding: 16px;
        text-decoration: none;
        }
        
        .sidebar a.active {
        background-color: #04AA6D;
        color: white;
        }

        .sidebar a:hover:not(.active) {
        background-color: #555;
        color: white;
        }

        div.content {
        margin-left: 200px;
        padding: 1px 16px;
        height: 1000px;
        }

        @media screen and (max-width: 700px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
        }
        .sidebar a {float: left;}
        div.content {margin-left: 0;}
        }

        @media screen and (max-width: 400px) {
        .sidebar a {
            text-align: center;
            float: none;
        }
        }
        .container-logout {
        width: 500px;
        min-height: 200px;
        background: #FFF;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0,0,0,.3);
        padding: 40px 30px;
        }
        .container-logout .login-email .input-group .btn {
        display: block;
        width: 100%;
        padding: 15px 20px;
        text-align: center;
        border: none;
        background: #a29bfe;
        outline: none;
        border-radius: 30px;
        font-size: 1.2rem;
        color: #FFF;
        cursor: pointer;
        transition: .3s;
        margin-top: 20px;
        }
        .container-logout .login-email .input-group .btn:hover {
        transform: translateY(-5px);
        background: #6c5ce7;
        }
        .container-index {
        width: 900px;
        min-height: auto;
        background: #FFF;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0,0,0,.3);
        padding: 40px 30px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
    <a class="active" href="index.php" style="background-color:green">Beranda</a>
    <a href="guru.php" style="background-color:lightgray">Guru</a>
    <a href="siswa.php" style="background-color:lightgray">Siswa</a>
    <a href="mapel.php" style="background-color:lightgray">Mata Pelajaran</a>
    <a href="jadwal.php" style="background-color:lightgray">Jadwal</a>
    <a href="logout.php" style="background-color:lightgray; color:red">logout</a>
    </div>