<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anuncio extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Anuncio_model');
    //Codeigniter : Write Less Do More
  }

  function index()
  {

    $data = array();

    $id =(isset($_GET['id']))?$_GET['id']+0:0;

    $data['anuncio'] = $this->Anuncio_model->cargarAnuncio($id);


  $data['anuncios'] = $this->Anuncio_model->listaAnuncios();

  $data['tipos'] = $this->Anuncio_model->listarTipos();

    $this->load->view('anuncio\anuncio',$data);
  }


  //funcion para guardar los datos de los jugadores
  function guardar(){

    if($_POST){
      $this->Anuncio_model->guardarAnuncio($_POST);
    }else{
      echo "Complete los Campos";
    }

    $this->load->view('mensaje');
  }


  function delete(){

    $id =(isset($_GET['id']))?$_GET['id']+0:0;

   $this->Anuncio_model->eliminarAnuncio($id);
   $this->load->view('mensaje');
  }
}
