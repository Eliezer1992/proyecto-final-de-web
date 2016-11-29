<table border="1" width="100%">
    <tr>
		<th>Id Tipo</th>
		<th>Nombre</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tipo as $t){ ?>
    <tr>
		<td><?php echo $t['id_tipo']; ?></td>
		<td><?php echo $t['nombre']; ?></td>
		<td>
            <a href="<?php echo site_url('tipo/edit/'.$t['id']); ?>">Edit</a> | 
            <a href="<?php echo site_url('tipo/remove/'.$t['id']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>