<br>
{{ form('kelas/create', 'role': 'form') }}
    <label for="name">Nama Kelas</label>
    <input type="text" name="txt_nama_kelas">
    <br>
    <button type="submit">Save</button>
</form>

<?php
	echo Phalcon\Tag::linkTo("kelas/viewData", "Lihat Data");
?>