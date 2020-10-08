<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\makesModel;


class makes extends BaseController
{
	public function list() {

    $dataModel = new makesModel; // Carregando o controlle

    $data['tableData'] = $dataModel->findAll(); // listando todos os registros
    // colocando na variável array

    $data['title'] = "Make Test";

    echo view('Makes/list', $data);
  }

  public function create()
  {
    echo view('makes/create');
    //metodo que só carrega uma view
  }

  public function create_make()
  {
    $dataModel = new makesModel;

    $formData = $this->request->getPost();

    $dataModel->save($formData);

    //return redirect()->to(base_url('public/vehicle/list'));
  }

	}



 ?>
