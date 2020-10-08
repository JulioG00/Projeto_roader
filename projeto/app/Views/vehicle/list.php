<?= $this -> extend('Templates/default') // carrega  o template ?>
<?= $this ->section ('content') // especifica em qual section coloca o abaixo ?>

<?php

// var_dump($titulo);
// var_dump($tabela);


$table = new \CodeIgniter\View\Table();

echo $title;

echo anchor('../public/vehicle/createForm', 'Create Vehicle');


echo $table->generate($tableData);


 ?>

 <?= $this ->endsection() // encerra a section ?>
