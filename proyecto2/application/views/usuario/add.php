<?php echo validation_errors(); ?>

<?php echo form_open('usuario/add'); ?>

	<div>Cedula : <input type="text" name="cedula" value="<?php echo $this->input->post('cedula'); ?>" /></div>
	<div>Correo : <input type="text" name="correo" value="<?php echo $this->input->post('correo'); ?>" /></div>
	<div>Nombre : <input type="text" name="nombre" value="<?php echo $this->input->post('nombre'); ?>" /></div>
	<div>Apellido : <input type="text" name="apellido" value="<?php echo $this->input->post('apellido'); ?>" /></div>
	<div>Telefono : <input type="text" name="telefono" value="<?php echo $this->input->post('telefono'); ?>" /></div>
	<div>Celular : <input type="text" name="celular" value="<?php echo $this->input->post('celular'); ?>" /></div>
	<div>Fax : <input type="text" name="fax" value="<?php echo $this->input->post('fax'); ?>" /></div>
	<div>Comentario : <input type="text" name="comentario" value="<?php echo $this->input->post('comentario'); ?>" /></div>
	<div>Id Rol : <input type="text" name="id_rol" value="<?php echo $this->input->post('id_rol'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>