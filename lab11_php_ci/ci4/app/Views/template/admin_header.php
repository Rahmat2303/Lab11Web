<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/css/bootstrap.min.css'); ?>">
</head>
<body>
    <div class="container">
        <header>
            <h1>Admin Portal Berita</h1>
        </header>
        <nav>
            <a href="<?= base_url('/'); ?>" class="active">Dashboard</a>
            <a href="<?= base_url('/article'); ?>">Artikel</a>
            <a href="<?= base_url('/admin/artikel/add'); ?>">Tambah Artikel</a>
        </nav>
