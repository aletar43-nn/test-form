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



    protected function get_form(){ // вывод формы (шапки)
        require_once ('h_form.php');

    }

    public function get_body(){     // метод вывода новостей
        $this->get_form();
        $this->get_news();
    }

    abstract function get_news();
}


?>