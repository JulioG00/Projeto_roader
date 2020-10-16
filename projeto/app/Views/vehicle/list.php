<?= $this -> extend('Templates/default') // carrega  o template ?>
<?= $this ->section ('content') // especifica em qual section coloca o abaixo ?>

<?php

// var_dump($titulo);
// var_dump($tabela);


$table = new \CodeIgniter\View\Table();

//echo $title;


echo anchor('../public/vehicle/form', '<button class="btn btn-xs btn-success "><span class="bigger-110">Create Vehicle</span><i class="ace-icon fa fa-plus icon-on-right"></i></button>');


foreach($tableData as $key => $value){
  $tableData[$key]["ops"] =
  anchor("../public/vehicle/delete_vehicle/". $value['id'], '<button class="btn btn-xs btn-danger"><i class="ace-icon fa fa-trash-o bigger-120"></i></button>') .
  anchor("../public/vehicle/form/". $value['id'], '<button class="btn btn-xs btn-success"><i class="ace-icon fa fa-edit bigger-120"></i></button>') ;


}


$tbheading = [
    "id",
	"vehicleName",
	"registration",	
	"make",
	"model",
	"kmInitial" ,
	"dateAdded",
	"ops",

];

$template = [
    'table_open' => '<table  class="table  table-bordered table-hover">'
];

$table->setTemplate($template);

$table->setHeading($tbheading);

echo $table->generate($tableData);


 ?>

 <?= $this ->endsection() // encerra a section ?>
