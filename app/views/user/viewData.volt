<div class="jumbotron" style="background-color: white;">	
	<?php
		echo Phalcon\Tag::linkTo("user", "Tambah Data");
	?>
	{% for datas in data %}
	{% if loop.first %}
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
	{% endif %}
	    <tbody>
	        <tr>
	            <td>{{ datas.id_user }}</td>
	            <td>{{ datas.nama_user }}</td>
	            <td>{{ datas.email_user }}</td>
	            <td>{{ datas.kelas.nama_kelas }}</td>
				<td><a href="{{ url('user/edit/' ~ datas.id_user) }}">Edit</a> </td>
				<td><a href="{{ url('user/hapus/' ~ datas.id_user) }}">Hapus</a> </td>
	        </tr>
	    </tbody>
	{% if loop.last %}
	    </table>
	{% endif %}
	{% else %}
	    No data
	{% endfor %}
</div>