<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>
<form action="" method="post">
    <p>
        <input class="satu" type="text" name="Judul">
    </p>
    <p>
        <textarea name="isi" cols="148" rows="10"></textarea>
    </p>
    <p>
        <input type="submit" value="Kirim" class="btn btn-primary">
    </p>
</form>

<?= $this->include('template/admin_footer'); ?>