<?php
trait database{
    public function connexionBdd(){
        $dsn = 'mysql:dbname=exopdo;host=localhost';
        $dbh = new PDO($dsn,'root','');
        return $dbh;
    }
}
?>