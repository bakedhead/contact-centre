<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use CodeIgniter\HTTP\RequestInterface;

class AddDynamicColumnToOrg extends Migration
{
    protected $request;

    public function __construct()
    {
        // $this->request = $request;
    }



    public function up($column = '')
    {
        // $column = $this->request->getPost('new_column'); // Adjust this based on your form input name

        $this->forge->addColumn('org', [
            $column => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
                'after' => 'org_plan',
            ],
        ]);
    }

    public function down($column = '')
    {
        // $column = $this->request->getPost('new_column'); // Adjust this based on your form input name

        $this->forge->dropColumn('org', $column);
    }
}
