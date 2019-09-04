<div class="jumbotron" style="background-color: white;">	
	<?php
		echo Phalcon\Tag::linkTo("kelas", "Tambah Data");
	?>
	{% for datas in data %}
	{% if loop.first %}
	<table border=1 align="center" class="table table-hover">
	    <thead>
	        <tr>
	            <th>Id</th>
	            <th>Nama Kelas</th>
	            <th colspan=2>Action</th>
	        </tr>
	    </thead>
	{% endif %}
	    <tbody>
	        <tr>
	            <td>{{ datas.id_kelas }}</td>
	            <td>{{ datas.nama_kelas }}</td>
				<td><a href="{{ url('kelas/edit/' ~ datas.id_kelas) }}">Edit</a> </td>
				<td><a href="{{ url('kelas/hapus/' ~ datas.id_kelas) }}">Hapus</a> </td>
	        </tr>
	    </tbody>
	{% if loop.last %}
	    </table>
	{% endif %}
	{% else %}
	    No data
	{% endfor %}
</div>