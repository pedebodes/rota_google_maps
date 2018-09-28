<?php
error_reporting(E_ALL ^ E_WARNING);
class Conecta {
    protected $db = null;
    protected $smtp = null;
    protected $user = 'root';
    protected $senha = '';
    protected $host = 'localhost';
    protected $banco = 'rotas';
    function __construct() {
        try {
            $this->db = new PDO ( 'mysql:host=' . $this->host . ';dbname=' . $this->banco . '', $this->user, $this->senha,array (PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8" ));
        } catch ( PDOException $e ) {
            print "Error!: " . $e->getMessage () . "<br/>";
        }
    }
    public function getFechAll() {
        if (count ( $this->smtp ) > 0) {
            return $this->smtp->fetchAll ();
        } else {
            return null;
        }
    }
    public function executa_sql($sql) {
        try {
            $this->smtp = $this->db->query ( $sql );
            return true;
        } catch ( Exception $e ) {
            throw new Exception ( $e->getMessage () );
        }
    }
}