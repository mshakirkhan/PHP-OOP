<?php 

interface action_one {
    public function insertRecord($data);
    public function deleteRecord($id);
    public function updateRecord($id);
    public function getRecord($id);
}

interface action_two {
    public function Logout();
    public function destroyRecord();
}

class Myactions implements action_one, action_two {
    public function insertRecord($data){
        echo "Record Inserted",PHP_EOL;
    }

    public function deleteRecord($id){
        echo "Record Deleted",PHP_EOL;
    }

    public function updateRecord($id){
        echo "Record Updated",PHP_EOL;
    }

    public function getRecord($id){
        echo "Record Fetched",PHP_EOL;
    }

    public function Logout(){
        echo "User Logout",PHP_EOL;
    }

    public function destroyRecord(){
        echo "Session Destroy",PHP_EOL;
    }

}
$actionObj = new Myactions();
$actionObj->insertRecord("Shakir");
$actionObj->deleteRecord(10);

?>