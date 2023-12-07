<?php
namespace App\Controllers;
use App\Models\OrgModel;
use CodeIgniter\Controller;

class OrgCrud extends Controller
{
    public $OrgModel;
    function __construct()
    {
        $this->OrgModel = model("OrgModel");
    }
    // show names list
    public function index(){
        // $OrgModel = model("OrgModel");
        $data['users'] = $this->OrgModel->orderBy('org_id', 'DESC')->findAll();
        return view('organisations', $data);
    }

    public function create(){
        return view('add-org');
    }
    public function store() {
        $OrgModel = model("OrgModel");
        $data = $this->request->getVar(array("org_name", "org_plan", "org_lines"));
     
        $OrgModel->insert($data);
        
        return $this->response->redirect(site_url('/organisations'));
    }
    public function singleUser($id = null){
        $OrgModel = model("OrgModel");
        $data['user_obj'] = $this->OrgModel->where('org_id', $id)->first();
        return view('editorg', $data);
    }

    // update name data
    public function update(){
        // $OrgModel = model("OrgModel");
        $id = $this->request->getVar('org_id');
        $data = $this->request->getVar(array("org_name", "org_plan", "org_lines"));
        // $data = array("data" => $data);

    
        $this->OrgModel->update($id, $data);
        return $this->response->redirect(site_url('/organisations'));
    }

    // delete name
    public function delete($id = null){
        
        $data['user'] = $this->OrgModel->where('org_id', $id)->delete($id);
        return $this->response->redirect(site_url('/organisations'));
    }
    
    public function addDynamicColumn()
    {
        return view('add_dynamic_column');
    }

    // Handle the form submission to add a new dynamic column
    public function saveDynamicColumn()
    {
        // $migration = service('migrations');

        // Get the dynamic column name from the form
        $column = $this->request->getPost('new_column');


        if(print_r($this->OrgModel->query("ALTER TABLE org ADD $column varchar(255);"))){
            return redirect()->to(base_url('/organisations'));
        }

        // Run the migration to add the new column
        // $migration->setNamespace('App')->latest()->force(true)->migrate(['NewColumnToOrg']);

        // Redirect to the list of organizations or display a success message
        
    }



}
?>