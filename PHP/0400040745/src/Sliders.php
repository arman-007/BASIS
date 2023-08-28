<?php

namespace Zay;
use PDO;

class Sliders{
    public $conn = null;

    public function __construct(){
        // connection to DB
        $servername = "localhost";
        $username = "root";
        $password = "";

        $this->conn = new PDO("mysql:host=$servername;dbname=md_arman_hosen", $username, $password);
        // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getActiveSliders(){
        $_startFrom = 0;
        $_total = 3;
        $query = "SELECT * FROM `sliders` WHERE `sliders`.`is_active` = 1 LIMIT $_startFrom, $_total";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();
        $sliders = $stmt->fetchAll();

        return $sliders;

        // var_dump($products);
    }
    public function index(){
        $query = "SELECT * FROM `sliders`";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();
        $sliders = $stmt->fetchAll();

        return $sliders;

        // var_dump($products);
    }

    public function store(){
        $approot = $_SERVER['DOCUMENT_ROOT']."/ARMAN/BASIS/PHP/0400040745/uploads/";
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
        // var_dump($_picture);
        // die();

        // echo $_POST['title'];
        $_title = $_POST['title'];
        // $_bannerPicture = $_FILES['picture']['name'];
        if(array_key_exists('is_active', $_POST)){
            $_is_active = $_POST['is_active'];
        }
        else{
            $_is_active = 0;
        }

        $query = "INSERT INTO `sliders` (`title`, `picture`, `is_active`) VALUES (:title, :picture, :is_active)";

        $stmt = $this->conn->prepare($query);

        $stmt -> bindParam(':title', $_title);
        $stmt -> bindParam(':picture', $_picture);
        $stmt -> bindParam(':is_active', $_is_active);

        $stmt -> execute();

        // var_dump($result);

        header("location:index.php");
    }

    public function show(){
        $_id = $_GET['id'];
    
        // var_dump($_GET);
        
        $query = "SELECT * FROM `sliders` WHERE id= (:id)";
        
        $stmt = $this->conn->prepare($query);
        
        $stmt -> bindParam(':id', $_id);
        
        $result = $stmt -> execute();
        
        $banner = $stmt-> fetch();

        return $banner;
    }

    public function edit(){
        $_id = $_GET['id'];
        
        $query = "SELECT * FROM `sliders` WHERE id= (:id)";
        
        $stmt = $this->conn->prepare($query);
        
        $stmt -> bindParam(':id', $_id);
        
        $stmt -> execute();
        
        $banner = $stmt-> fetch();

        return $banner;
    }

    public function update(){
        $approot = $_SERVER['DOCUMENT_ROOT']."/ARMAN/BASIS/PHP/0400040745/uploads/";

        $_id = $_POST['id'];
        $_title = $_POST['title'];
        if(array_key_exists('is_active', $_POST)){
            $_is_active = $_POST['is_active'];
        }
        else{
            $_is_active = 0;
        }
        $_modified_at = date("Y-m-d h-i-s",time());
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

        $query = "UPDATE `sliders` SET `title` = :title, `is_active` = :is_active, `modified_at` = :modified_at, `picture` = :picture WHERE `sliders`.`id` = :id";

        $stmt = $this->conn->prepare($query);

        $stmt -> bindParam(':id', $_id);
        $stmt -> bindParam(':title', $_title);
        $stmt -> bindParam(':is_active', $_is_active);
        $stmt -> bindParam(':modified_at', $_modified_at);
        $stmt -> bindParam(':picture', $_picture);

        $stmt -> execute();

        // var_dump($result);

        header("location: index.php");
    }

    // public function trash(){
    //     $_id = $_GET['id'];

    //     $_soft_delete = 1;
        
    //     $query = "UPDATE `sliders` SET `soft_delete` = :soft_delete WHERE `sliders`.`id` = :id";
        
    //     $stmt = $this->conn->prepare($query);
        
    //     $stmt -> bindParam(':id', $_id);
    //     $stmt -> bindParam(':soft_delete', $_soft_delete);
        
    //     $result = $stmt -> execute();
        
    //     // $product = $stmt-> fetch();
    //     header("location: index.php");
    // }

    // public function trashIndex(){
    //     $query = "SELECT * FROM `sliders` WHERE `sliders`.`soft_delete` = 1";

    //     $stmt = $this->conn->prepare($query);

    //     $result = $stmt->execute();
    //     $sliders = $stmt->fetchAll();

    //     // var_dump($products);
    //     return $sliders;
    // }

    // public function restore(){
    //     $_id = $_GET['id'];

    //     $_soft_delete = 0;
        
    //     $query = "UPDATE `sliders` SET `soft_delete` = :soft_delete WHERE `sliders`.`id` = :id";
        
    //     $stmt = $this->conn->prepare($query);
        
    //     $stmt -> bindParam(':id', $_id);
    //     $stmt -> bindParam(':soft_delete', $_soft_delete);
        
    //     $stmt -> execute();
        
    //     // $product = $stmt-> fetch();
    //     header("location: trash_index.php");
    // }

    public function delete(){
        $_id = $_GET['id'];
        
        $query = "DELETE FROM sliders WHERE `sliders`.`id` = :id";
        
        $stmt = $this->conn->prepare($query);
        
        $stmt -> bindParam(':id', $_id);
        
        $stmt -> execute();
        
        // $product = $stmt-> fetch();
        header("location: trash_index.php");
    }
}

?>