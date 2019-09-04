{{ form('kelas/update', 'role': 'form') }}
    <input type="hidden" name="txt_id" value=<?php echo $id ?>>
	<label for="name">Nama Kelas</label>
	<input type="text" name="txt_nama_kelas" value="<?php echo $nama ?>">
    <br>
    <button type="submit">Save</button>
</form>