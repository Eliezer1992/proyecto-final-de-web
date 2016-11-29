<table border="1" width="100%">
    <tr>
		<th>ID</th>
		<th>Titulo</th>
		<th>Direccion</th>
		<th>Tipo</th>
		<th>Precio</th>
		<th>Accion</th>
		<th>Descripcion</th>
		<th>Ubicacion</th>
		<th>Fotos</th>
		<th>Id Usuario</th>
		<th>Actions</th>
    </tr>
	<?php foreach($anuncio as $a){ ?>
    <tr>
		<td><?php echo $a['id']; ?></td>
		<td><?php echo $a['titulo']; ?></td>
		<td><?php echo $a['direccion']; ?></td>
		<td><?php echo $a['tipo']; ?></td>
		<td><?php echo $a['precio']; ?></td>
		<td><?php echo $a['accion']; ?></td>
		<td><?php echo $a['descripcion']; ?></td>
		<td><?php echo $a['ubicacion']; ?></td>
		<td><?php echo $a['fotos']; ?></td>
		<td><?php echo $a['id_usuario']; ?></td>
		<td>
            <a href="<?php echo site_url('anuncio/edit/'.$a['id']); ?>">Edit</a> | 
            <a href="<?php echo site_url('anuncio/remove/'.$a['id']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>