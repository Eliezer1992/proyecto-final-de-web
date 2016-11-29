<?php echo validation_errors(); ?>

<?php echo form_open('tipo/add'); ?>

	<div>Nombre : <input type="text" name="nombre" value="<?php echo $this->input->post('nombre'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>