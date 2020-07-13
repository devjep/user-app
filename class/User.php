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

            $query= "SELECT * FROM users";    
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

    public function create($firstname,$lastname,$email,$image){
        try {
            $stmt = $this->conn->prepare ("
                    INSERT INTO users 
                    (firstname, lastname, email, image)
                    VALUES
                    (:firstname , :lastname , :email, :image)
                ");
            $stmt->bindParam(':firstname' , $firstname);
            $stmt->bindParam(':lastname' ,  $lastname);
            $stmt->bindParam(':email' ,     $email);
            $stmt->bindParam(':image' ,      $image);
            $stmt->execute();
        
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        return true;
    
    }

    
    public function getSingleUser($id)
    {
        
        try{

            $query= "SELECT * FROM  users where id= ?";    
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

            $query= "DELETE  FROM users where id= ?";    
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

    
    public function checkUserExist($email)
    {
        try{

            $query= "SELECT *  FROM users where email= ?";    
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(1, $email);
            $stmt->execute();
            $data = $stmt->fetch();

            if(!empty($data))
            {
                return true;
            }
            
        }
        catch(PDOException $exception)
        {
            echo "Connection error: " . $exception->getMessage();
        }
        return false;
    }


    



}



?>