<?php
namespace Ecom;

use PDO;

class Products{
    public $id = null;
    public $title = null;
    public $conn = null;

    public function __construct(){
        // connection to DB
        $servername = "localhost";
        $username = "root";
        $password = "";

        $this->conn = new PDO("mysql:host=$servername;dbname=ARMAN", $username, $password);
        // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    public function store(){
        $approot = $_SERVER['DOCUMENT_ROOT']."/ARMAN/BASIS/PHP/CRUD/uploads/";
        //working with image
        $file_name = "IMG_".time()."_".$_FILES['picture']['name'];

        $target = $_FILES['picture']['tmp_name'];
            
        $destination = $approot.$file_name;
        
        $is_file_moved = move_uploaded_file($target, $destination);

        if($is_file_moved){
            $_picture =  $file_name;
        }
        else{
            $_picture = null;
        }

        // echo $_POST['title'];
        $_title = $_POST['title'];
        $_description = $_POST['description'];
        if(array_key_exists('is_active', $_POST)){
            $_is_active = $_POST['is_active'];
        }
        else{
            $_is_active = 0;
        }
        // $_picture = $_FILES['picture']['name'];
        $_created_at = date("Y-m-d h-i-s",time());

        $query = "INSERT INTO `products` (`title`, `description`, `is_active`, `picture`, `created_at`) VALUES (:title, :description, :is_active, :picture, :created_at)";

        $stmt = $this->conn->prepare($query);

        $stmt -> bindParam(':title', $_title);
        $stmt -> bindParam(':description', $_description);
        $stmt -> bindParam(':is_active', $_is_active);
        $stmt -> bindParam(':picture', $_picture);
        $stmt -> bindParam(':created_at', $_created_at);

        $result = $stmt -> execute();

        header("location: index.php");
    }

    public function index(){
        $query = "SELECT * FROM `products` WHERE `products`.`is_deleted` = 0";

        $stmt = $this->conn->prepare($query);

        $result = $stmt->execute();
        $products = $stmt->fetchAll();

        return $products;
    }
    
    public function getActiveBestSellersProducts(){
        $_startFrom = 0;
        $_total = 5;

        $query = "SELECT * FROM `products` WHERE `products`.`is_active` = 1 LIMIT $_startFrom, $_total";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();
        $products = $stmt->fetchAll();

        return $products;
    }

    public function show(){
        $_id = $_GET['id'];
    
        $query = "SELECT * FROM `products` WHERE id= (:id)";
    
        $stmt = $this->conn->prepare($query);
    
        $stmt->bindParam(':id', $_id);
    
        $result = $stmt->execute();
    
        $product = $stmt->fetch();

        return $product;
    }

    public function edit(){
        $_id = $_GET['id'];
        
        $query = "SELECT * FROM `products` WHERE id= (:id)";
        
        $stmt = $this->conn->prepare($query);
        
        $stmt -> bindParam(':id', $_id);
        
        $result = $stmt -> execute();
        
        $product = $stmt-> fetch();

        return $product;
    }

    public function update(){
        $approot = $_SERVER['DOCUMENT_ROOT']."/ARMAN/BASIS/PHP/CRUD/uploads/";
        //working with image
        if($_FILES['picture']['name'] != ""){
            $file_name = "IMG_".time()."_".$_FILES['picture']['name'];
    
            $target = $_FILES['picture']['tmp_name'];
                
            $destination = $approot.$file_name;
    
            $is_file_moved = move_uploaded_file($target, $destination);
    
            if($is_file_moved){
                $_picture =  $file_name;
            }
            else{
                $_picture = null;
            }
        }
        else{
            $_picture = $_POST['old_picture'];
        }
    
        $_id = $_POST['id'];
        $_title = $_POST['title'];
        $_description = $_POST['description'];
        if(array_key_exists('is_active', $_POST)){
            $_is_active = $_POST['is_active'];
        }
        else{
            $_is_active = 0;
        }
        $_modified_at = date("Y-m-d h-i-s",time());
    
        $query = "UPDATE `products` SET `title` = :title, `description` = :description, `is_active` = :is_active, `picture` = :picture, `modified_at` = :modified_at WHERE `products`.`id` = :id";
    
        $stmt = $this->conn->prepare($query);
    
        $stmt -> bindParam(':id', $_id);
        $stmt -> bindParam(':title', $_title);
        $stmt -> bindParam(':description', $_description);
        $stmt -> bindParam(':is_active', $_is_active);
        $stmt -> bindParam(':picture', $_picture);
        $stmt -> bindParam(':modified_at', $_modified_at);
    
        $result = $stmt -> execute();
    
        // var_dump($result);
    
        header("location: index.php");
    }

    public function trash(){
        $_id = $_GET['id'];

        $_is_deleted = 1;
        
        $query = "UPDATE `products` SET `is_deleted` = :is_deleted WHERE `products`.`id` = :id";
        
        $stmt = $this->conn->prepare($query);
        
        $stmt -> bindParam(':id', $_id);
        $stmt -> bindParam(':is_deleted', $_is_deleted);
        
        $result = $stmt -> execute();
        
        // $product = $stmt-> fetch();
        header("location: index.php");
    }

    public function trashIndex(){
        $query = "SELECT * FROM `products` WHERE `products`.`is_deleted` = 1";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();
        $products = $stmt->fetchAll();

        return $products;
    }

    public function delete(){
        $_id = $_GET['id'];
        
        $query = "DELETE FROM products WHERE `products`.`id` = :id";
        
        $stmt = $this->conn->prepare($query);
        
        $stmt -> bindParam(':id', $_id);
        
        $result = $stmt -> execute();
        
        // $product = $stmt-> fetch();
        header("location: trash_index.php");
    }

    public function restore(){
        $_id = $_GET['id'];

        $_is_deleted = 0;
        
        $query = "UPDATE `products` SET `is_deleted` = :is_deleted WHERE `products`.`id` = :id";
        
        $stmt = $this->conn->prepare($query);
        
        $stmt -> bindParam(':id', $_id);
        $stmt -> bindParam(':is_deleted', $_is_deleted);
        
        $stmt -> execute();
        
        // $product = $stmt-> fetch();
        header("location: index.php");
    }
}

?>