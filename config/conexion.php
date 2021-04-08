<?php

/*class Database extends mysqli
{
    private $DB_HOST = '34.71.80.62';
    private $DB_USER = 'root';
    private $DB_PASS = 'eNFr49WxFpsnFy';
    private $DB_NAME = 'lumina';

    public function __construct()
    {
        parent ::__construct($this->DB_HOST, $this->DB_USER,$this->DB_PASS, $this->DB_NAME);
        if ($this->connect_errno) {
            die('Error en la conexión ' . mysqli_connect_errno());
            exit();
        } else {
            //echo "Conectado";
            mysqli_set_charset($this, 'utf8');
        }
    }
}*/

$servername="34.71.80.62";
$username="root";
$password="eNFr49WxFpsnFy";
$database="lumina";
/*$servername="localhost";
$username="root";
$password="";
$database="pruebalumina";*/
$conn = mysqli_connect($servername, $username, $password, $database);

/*if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);*/

?>