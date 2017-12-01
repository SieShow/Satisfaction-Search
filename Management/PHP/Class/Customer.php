<?php 
include_once 'Entity.php';
include_once '../PHP/DataBaseQuerys.php';

class Customer extends Entity{

    private $email;
    private $forms_respondidos;

    function __construct($i){
        parent::__construct($i);
        $getinfo = LoadDataFrom($i, "customer");
        $this->name = $getinfo["name"];
        $this->email = $getinfo["note_avarage"];
        $this->visitas = $getinfo[3];
        $this->forms_respondidos = $getinfo[4];
        $this->v11_id = $getinfo[5];
    }
    public function GetID(){
        return $this->id;
    }
    public function GetName(){
        return $this->name;
    }
    public function GetNote_avarage(){
        return $this->note_avarage;
    }
    public function GetIssue_avarage(){
        return $this->issue_avarage;
    }
    public function GetV11_Code(){
        return $this->v11_id;
    }   
    public function GetTotalOfVisits(){
        return $this->visitas;
    }
    public function LoadHistoric(){
        LoadHistoric("customer", $this->v11_id);
    }
    public function GetEmails(){
        return $this->email;
    }
    public function GetForms_Answereds(){
        return $this->forms_respondidos;
    }
}
?>