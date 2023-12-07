<?php 
namespace App\Models;
use CodeIgniter\Model;

class OrgModel extends Model
{
    protected $table = 'org';

    protected $primaryKey = 'org_id';
    
    protected $allowedFields = ['org_name','org_lines','org_plan'];

    // function orderBy($orderBy, $direction = '', $escape = null)
    // {
    //     // return 1;
    // }

}