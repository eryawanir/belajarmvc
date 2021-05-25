<?php
class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name =  DB_NAME;

    private $dbh; //database handler
    private $stmt; //statement untuk menyimpan query

    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;

        //optimasi koneksi database
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
