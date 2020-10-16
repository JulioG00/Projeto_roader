<?= $this -> extend('Templates/default') // carrega  o template ?>
<?= $this ->section ('content') // especifica em qual section coloca o abaixo ?>

<?php
if($id == 0){ 
    $vehicleName = '';
    $registration = '';
    $make = '';
    $model = '';
    $kmInitial = '';
    $dateAdded = '';
}
else{
    $vehicleName = $vehicleData['vehicleName'];
    $registration = $vehicleData['registration'];
    $make = $vehicleData['make'];
    $model = $vehicleData['model'];
    $kmInitial = $vehicleData['kmInitial'];
    $dateAdded = $vehicleData['dateAdded'];
}


$classlabel = ['class' => "col-sm-3 control-label no-padding-right"];
$classinput = ['class' => "col-xs-10 col-sm-5"];

$formgroup = '<div class="form-group">';

helper('form');

echo form_open('../public/Vehicle/create_vehicle');

if($id > 0) echo form_hidden('id', $id);

echo $formgroup;

echo form_label('vehicleName','vehicleName', $classlabel);
echo form_input('vehicleName',$vehicleName);
echo '</div>';

echo $formgroup;
echo form_label('registration','registration', $classlabel  );
echo form_input('registration',$registration);
echo '</div>';

echo $formgroup;
echo form_label('make','make', $classlabel);
echo form_input('make',$make);
echo '</div>';

echo $formgroup;
echo form_label('model','model', $classlabel);
echo form_input('model',$model);
echo '</div>';

echo $formgroup;
echo form_label('kmInitial','kmInitial', $classlabel);
echo form_input('kmInitial',$kmInitial);
echo '</div>';

echo $formgroup;
echo form_label('dateAdded','dateAdded', $classlabel);
echo form_input('dateAdded',$dateAdded);
echo '</div>';


echo  '<div class="form-actions center">
'. form_submit('submit', 'Save Vehicle!', ['class' => "btn btn-sm btn-success"]).'
<i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
</div>';





 ?>

<?= $this ->endsection() // encerra a section ?>

