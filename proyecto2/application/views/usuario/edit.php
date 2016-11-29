<?php echo validation_errors(); ?>

<?php echo form_open('usuario/edit/'.$usuario['id']); ?>

	<div>Cedula : <input type="text" name="cedula" value="<?php echo ($this->input->post('cedula') ? $this->input->post('cedula') : $usuario['cedula']); ?>" /></div>
	<div>Correo : <input type="text" name="correo" value="<?php echo ($this->input->post('correo') ? $this->input->post('correo') : $usuario['correo']); ?>" /></div>
	<div>Nombre : <input type="text" name="nombre" value="<?php echo ($this->input->post('nombre') ? $this->input->post('nombre') : $usuario['nombre']); ?>" /></div>
	<div>Apellido : <input type="text" name="apellido" value="<?php echo ($this->input->post('apellido') ? $this->input->post('apellido') : $usuario['apellido']); ?>" /></div>
	<div>Telefono : <input type="text" name="telefono" value="<?php echo ($this->input->post('telefono') ? $this->input->post('telefono') : $usuario['telefono']); ?>" /></div>
	<div>Celular : <input type="text" name="celular" value="<?php echo ($this->input->post('celular') ? $this->input->post('celular') : $usuario['celular']); ?>" /></div>
	<div>Fax : <input type="text" name="fax" value="<?php echo ($this->input->post('fax') ? $this->input->post('fax') : $usuario['fax']); ?>" /></div>
	<div>Comentario : <input type="text" name="comentario" value="<?php echo ($this->input->post('comentario') ? $this->input->post('comentario') : $usuario['comentario']); ?>" /></div>
	<div>Id Rol : <input type="text" name="id_rol" value="<?php echo ($this->input->post('id_rol') ? $this->input->post('id_rol') : $usuario['id_rol']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>