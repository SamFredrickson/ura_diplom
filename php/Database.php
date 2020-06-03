<?php

class Database{
    
    private $db = null;

    public function __construct(){
        try{
            $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME .';charset=utf8', USER, PASSWORD);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $this->db = $db;

        }catch(PDOException $e){
            print "Could not connect: " . $e->getMessage();
        }
    }

    private function print_service($title, $desc, $price){
print <<<_HTML_
<li>
<h3>$title</h3>
<p>$desc</p>
<p>Цена: $price Р</p>
</li>
_HTML_;
    }

    public function print_services(){
        $q = $this->db->query("SELECT * FROM services");
        while($row = $q->fetch()) 
            $this->print_service($row['title'], $row['desc_serv'], $row['price']);
    }
}

