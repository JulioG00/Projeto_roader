<?php


$table = new \CodeIgniter\View\Table();


echo "<br>";
echo "<br>";

$template = [
 'table_open' => '<table border="1" cellpadding="10" cellspacing="0" align="center" >'
];

$table->setTemplate($template);


$table->setHeading('Cod','Name', 'Create', 'Up','Del');

echo $table->generate($tableData);



 ?>
