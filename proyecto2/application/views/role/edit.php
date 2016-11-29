<?php echo validation_errors(); ?>

<?php echo form_open('role/edit/'.$role['id_rol']); ?>

	<div>Nombre : <input type="text" name="nombre" value="<?php echo ($this->input->post('nombre') ? $this->input->post('nombre') : $role['nombre']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>