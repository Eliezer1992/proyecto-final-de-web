<?php echo validation_errors(); ?>

<?php echo form_open('anuncio/add'); ?>

	<div>Titulo : <input type="text" name="titulo" value="<?php echo $this->input->post('titulo'); ?>" /></div>
	<div>Direccion : <input type="text" name="direccion" value="<?php echo $this->input->post('direccion'); ?>" /></div>
	<div>Tipo : <input type="text" name="tipo" value="<?php echo $this->input->post('tipo'); ?>" /></div>
	<div>Precio : <input type="text" name="precio" value="<?php echo $this->input->post('precio'); ?>" /></div>
	<div>Accion : <input type="text" name="accion" value="<?php echo $this->input->post('accion'); ?>" /></div>
	<div>Descripcion : <input type="text" name="descripcion" value="<?php echo $this->input->post('descripcion'); ?>" /></div>
	<div>Ubicacion : <input type="text" name="ubicacion" value="<?php echo $this->input->post('ubicacion'); ?>" /></div>
	<div>Fotos : <input type="text" name="fotos" value="<?php echo $this->input->post('fotos'); ?>" /></div>
	<div>Id Usuario : <input type="text" name="id_usuario" value="<?php echo $this->input->post('id_usuario'); ?>" /></div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>