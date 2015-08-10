<?php
abstract class  ACore {

    protected $db;

    public function __construct(){
        $this->db = mysql_connect(HOST, USER, PASSWORD);
        if(!$this->db){
            exit('Ошибка соединения с базой данных '.mysql_error());
        }
        if(!mysql_select_db(DB,$this->db)){
            exit('Нет такой базы данных! '.mysql_error());
        }
        mysql_query('SET NAMES "UTF8"');
    }

    public function get_body(){
        echo 'Hello World!';
    }
}

?>