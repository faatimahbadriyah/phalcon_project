<div class="jumbotron" style="background-color: white;">	
	<?php
		echo Phalcon\Tag::linkTo("user", "Tambah Data");
	?>
	<?php $v15007834871iterated = false; ?><?php $v15007834871iterator = $data; $v15007834871incr = 0; $v15007834871loop = new stdClass(); $v15007834871loop->self = &$v15007834871loop; $v15007834871loop->length = count($v15007834871iterator); $v15007834871loop->index = 1; $v15007834871loop->index0 = 1; $v15007834871loop->revindex = $v15007834871loop->length; $v15007834871loop->revindex0 = $v15007834871loop->length - 1; ?><?php foreach ($v15007834871iterator as $datas) { ?><?php $v15007834871loop->first = ($v15007834871incr == 0); $v15007834871loop->index = $v15007834871incr + 1; $v15007834871loop->index0 = $v15007834871incr; $v15007834871loop->revindex = $v15007834871loop->length - $v15007834871incr; $v15007834871loop->revindex0 = $v15007834871loop->length - ($v15007834871incr + 1); $v15007834871loop->last = ($v15007834871incr == ($v15007834871loop->length - 1)); ?><?php $v15007834871iterated = true; ?>
	<?php if ($v15007834871loop->first) { ?>
	<table border=1 align="center" class="table table-hover">
	    <thead>
	        <tr>
	            <th>Id</th>
	            <th>Name</th>
	            <th>Email</th>
	            <th>Kelas</th>
	            <th colspan=2>Action</th>
	        </tr>
	    </thead>
	<?php } ?>
	    <tbody>
	        <tr>
	            <td><?= $datas->id_user ?></td>
	            <td><?= $datas->nama_user ?></td>
	            <td><?= $datas->email_user ?></td>
	            <td><?= $datas->kelas->nama_kelas ?></td>
				<td><a href="<?= $this->url->get('user/edit/' . $datas->id_user) ?>">Edit</a> </td>
				<td><a href="<?= $this->url->get('user/hapus/' . $datas->id_user) ?>">Hapus</a> </td>
	        </tr>
	    </tbody>
	<?php if ($v15007834871loop->last) { ?>
	    </table>
	<?php } ?>
	<?php $v15007834871incr++; } if (!$v15007834871iterated) { ?>
	    No data
	<?php } ?>
</div>