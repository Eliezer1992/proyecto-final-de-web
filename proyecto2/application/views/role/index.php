<table border="1" width="100%">
    <tr>
		<th>Id Rol</th>
		<th>Nombre</th>
		<th>Actions</th>
    </tr>
	<?php foreach($roles as $r){ ?>
    <tr>
		<td><?php echo $r['id_rol']; ?></td>
		<td><?php echo $r['nombre']; ?></td>
		<td>
            <a href="<?php echo site_url('role/edit/'.$r['id']); ?>">Edit</a> | 
            <a href="<?php echo site_url('role/remove/'.$r['id']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>