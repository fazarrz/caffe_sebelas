<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>


<h2>UPLOAD IMAGE</h2>
<hr>
<?= view_cell('\App\Controllers\Admin\Menu::option')?>
<br><br>
<form action="<?= base_url('/admin/menu/insert')?>" method="post" enctype="multipart/form-data">
    Gambar : <input type="file" name ="gambar" required>
    <br>
    <input type="submit" name="simpan" value="SIMPAN">
</form>
<?= $this->endSection() ?>