<?php
 class database{
     private $host;
     private $user;
     private $pass;
     private $db;
     private $conn = NULL;
     //dn các phương thức
     public function __construct()
     {
              //hàm tạo mặc định khởi tạo kết nối đối với đối tượng
         $this->host = 'localhost';
         $this->user = 'root';
         $this->pass = '';
         $this->db = 'tlu_phonebook';
         $this->openConnection();
     }
     public function openConnection(){
        $this->conn = mysqli_connect($this->host,$this->user, $this->pass,$this->db);  
        if(!$this->conn){

        }
     }
     public function getConn(){
         return $this->conn;
     }

     public function closeConnection(){
         mysqli_close($this->conn);
     }
 }
?>