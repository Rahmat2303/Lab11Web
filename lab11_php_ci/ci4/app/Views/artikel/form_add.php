<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>
<form action="" method="post" enctype="multipart/form-data"> 
    <p>
        <input class="satu" type="text" name="Judul" autofocus>
    </p>
    <p>
        <textarea name="isi" cols="148" rows="10"></textarea>
    </p>
    <p>
        <input type="file" name="gambar">
    </p>
    <p>
        <input type="submit" value="Kirim" class="btn btn-primary">
    </p>
</form>

<?= $this->include('template/admin_footer'); ?>