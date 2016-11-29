<?php echo validation_errors(); ?>

<?php echo form_open('anuncio/edit/'.$anuncio['id']); ?>

	<div>Titulo : <input type="text" name="titulo" value="<?php echo ($this->input->post('titulo') ? $this->input->post('titulo') : $anuncio['titulo']); ?>" /></div>
	<div>Direccion : <input type="text" name="direccion" value="<?php echo ($this->input->post('direccion') ? $this->input->post('direccion') : $anuncio['direccion']); ?>" /></div>
	<div>Tipo : <input type="text" name="tipo" value="<?php echo ($this->input->post('tipo') ? $this->input->post('tipo') : $anuncio['tipo']); ?>" /></div>
	<div>Precio : <input type="text" name="precio" value="<?php echo ($this->input->post('precio') ? $this->input->post('precio') : $anuncio['precio']); ?>" /></div>
	<div>Accion : <input type="text" name="accion" value="<?php echo ($this->input->post('accion') ? $this->input->post('accion') : $anuncio['accion']); ?>" /></div>
	<div>Descripcion : <input type="text" name="descripcion" value="<?php echo ($this->input->post('descripcion') ? $this->input->post('descripcion') : $anuncio['descripcion']); ?>" /></div>
	<div>Ubicacion : <input type="text" name="ubicacion" value="<?php echo ($this->input->post('ubicacion') ? $this->input->post('ubicacion') : $anuncio['ubicacion']); ?>" /></div>
	<div>Fotos : <input type="text" name="fotos" value="<?php echo ($this->input->post('fotos') ? $this->input->post('fotos') : $anuncio['fotos']); ?>" /></div>
	<div>Id Usuario : <input type="text" name="id_usuario" value="<?php echo ($this->input->post('id_usuario') ? $this->input->post('id_usuario') : $anuncio['id_usuario']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>