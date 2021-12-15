<?php

use Functions\Session;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angkothub | <?= $title = Session::getFlashdata() ?></title>
    <link rel="icon" href="<?= BASEURL ?>/img/waifu.png">

    <!-- style -->
    <link rel="stylesheet" href="<?= BASEURL ?>/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/css/style.css">
    <!-- endstyle -->

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand text-white" href="<?= BASEURL ?>/manage">Manage<span class="text-hub">Data</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link <?= $this->sectionCheck($title, 'manage pangkalan'); ?>" href="<?= BASEURL ?>/manage/pangkalan">Pangkalan</a>
                    <a class="nav-link <?= $this->sectionCheck($title, 'manage angkot'); ?>" href="<?= BASEURL ?>/manage/angkot">Angkot</a>
                    <a class="nav-link" href="<?= BASEURL ?>">Utama</a>
                </div>
            </div>
        </div>
    </nav>