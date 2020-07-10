<?php


require_once('Database.php');

class User{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn =  $database->dbConnection();
    }

    public function getAllUser()
    {
        
        try{

            $query= "SELECT * FROM customer";    
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll();
           

        }
        catch(PDOException $exception)
        {
            echo "Connection error: " . $exception->getMessage();
        }
        
       
        return $data;
    }
    
    public function getSingleUser($id)
    {
        
        try{

            $query= "SELECT * FROM customer where id= ?";    
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(1, $id);
            $stmt->execute();
            $data = $stmt->fetch();
        }
        catch(PDOException $exception)
        {
            echo "Connection error: " . $exception->getMessage();
        }
        return $data;
    }
   
    public function delete($id)
    {
        try{

            $query= "DELETE  FROM customer where id= ?";    
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(1, $id);
            $stmt->execute();
            return true;
        }
        catch(PDOException $exception)
        {
            echo "Connection error: " . $exception->getMessage();
        }
        
    }


    



}



?>