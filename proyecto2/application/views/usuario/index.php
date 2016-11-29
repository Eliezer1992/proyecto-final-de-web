<table border="1" width="100%">
    <tr>
		<th>ID</th>
		<th>Cedula</th>
		<th>Correo</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Telefono</th>
		<th>Celular</th>
		<th>Fax</th>
		<th>Comentario</th>
		<th>Id Rol</th>
		<th>Actions</th>
    </tr>
	<?php foreach($usuario as $u){ ?>
    <tr>
		<td><?php echo $u['id']; ?></td>
		<td><?php echo $u['cedula']; ?></td>
		<td><?php echo $u['correo']; ?></td>
		<td><?php echo $u['nombre']; ?></td>
		<td><?php echo $u['apellido']; ?></td>
		<td><?php echo $u['telefono']; ?></td>
		<td><?php echo $u['celular']; ?></td>
		<td><?php echo $u['fax']; ?></td>
		<td><?php echo $u['comentario']; ?></td>
		<td><?php echo $u['id_rol']; ?></td>
		<td>
            <a href="<?php echo site_url('usuario/edit/'.$u['id']); ?>">Edit</a> | 
            <a href="<?php echo site_url('usuario/remove/'.$u['id']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>