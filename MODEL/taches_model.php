<?php
require_once './config.php';

class Taches {
    static public function get_task(){
        $data = get_connection();
        $res = $data->query("select * from taches")->fetchAll();
        return array(
            'response' => $res
        );
    }
    static public function Enregistrer($name,$do){
        $data = get_connection();
        if($data->query("insert into taches (name,do) value ('$name','$do')")){
            
            return array(
                'response' => "Enregistrement ok"
            );
        }
        else
        {
            return array(
                'response' => "Enregistrement pas ok"
            );
        }
    }
}
