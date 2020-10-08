<?php
namespace App\Models;

use CodeIgniter\Model;

class eventModel extends Model
{
    protected $table      = 'event_types';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['event_type_name'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}

?>
