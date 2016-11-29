<?php echo validation_errors(); ?>

<?php echo form_open('tipo/edit/'.$tipo['id_tipo']); ?>

	<div>Nombre : <input type="text" name="nombre" value="<?php echo ($this->input->post('nombre') ? $this->input->post('nombre') : $tipo['nombre']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>