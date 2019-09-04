<div class="jumbotron" style="background-color: white;">	
	<?php
		echo Phalcon\Tag::linkTo("kelas", "Tambah Data");
	?>
	<?php $v3841868961iterated = false; ?><?php $v3841868961iterator = $data; $v3841868961incr = 0; $v3841868961loop = new stdClass(); $v3841868961loop->self = &$v3841868961loop; $v3841868961loop->length = count($v3841868961iterator); $v3841868961loop->index = 1; $v3841868961loop->index0 = 1; $v3841868961loop->revindex = $v3841868961loop->length; $v3841868961loop->revindex0 = $v3841868961loop->length - 1; ?><?php foreach ($v3841868961iterator as $datas) { ?><?php $v3841868961loop->first = ($v3841868961incr == 0); $v3841868961loop->index = $v3841868961incr + 1; $v3841868961loop->index0 = $v3841868961incr; $v3841868961loop->revindex = $v3841868961loop->length - $v3841868961incr; $v3841868961loop->revindex0 = $v3841868961loop->length - ($v3841868961incr + 1); $v3841868961loop->last = ($v3841868961incr == ($v3841868961loop->length - 1)); ?><?php $v3841868961iterated = true; ?>
	<?php if ($v3841868961loop->first) { ?>
	<table border=1 align="center" class="table table-hover">
	    <thead>
	        <tr>
	            <th>Id</th>
	            <th>Nama Kelas</th>
	            <th colspan=2>Action</th>
	        </tr>
	    </thead>
	<?php } ?>
	    <tbody>
	        <tr>
	            <td><?= $datas->id_kelas ?></td>
	            <td><?= $datas->nama_kelas ?></td>
				<td><a href="<?= $this->url->get('kelas/edit/' . $datas->id_kelas) ?>">Edit</a> </td>
				<td><a href="<?= $this->url->get('kelas/hapus/' . $datas->id_kelas) ?>">Hapus</a> </td>
	        </tr>
	    </tbody>
	<?php if ($v3841868961loop->last) { ?>
	    </table>
	<?php } ?>
	<?php $v3841868961incr++; } if (!$v3841868961iterated) { ?>
	    No data
	<?php } ?>
</div>