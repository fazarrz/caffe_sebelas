<select  class="form-control" name="id" onchange="this.form.submit()" id="id">
    <option value="1">Kategori...</option>
    <?php foreach($kategori as $key => $value):?>
    <option value="<?= $value['id'] ?>"><?= $value['kategori'] ?></option>
    <?php endforeach;?>
</select>