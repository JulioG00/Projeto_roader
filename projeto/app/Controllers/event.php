<?php

namespace App\Controllers;

use App\Models\eventModel;

class event extends BaseController
{
  public function list() { // This is the Read portion of the cRud

    $dataModel = new eventModel;

    $data['tableData'] = $dataModel->findAll();

    $data['title'] = "Atividade Pw3";

    echo view('eventTest/eventList',$data);

  }
}





 ?>
