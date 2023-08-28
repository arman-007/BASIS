<?php

namespace Ecom;
use PDO;

class Banners{
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

    public function getActiveBanners(){
        $_startFrom = 0;
        $_total = 8;
        $query = "SELECT * FROM `banners` WHERE `banners`.`is_active` = 1 LIMIT $_startFrom, $_total";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();
        $banners = $stmt->fetchAll();

        return $banners;

        // var_dump($products);
    }
    public function index(){
        $query = "SELECT * FROM `banners` WHERE `banners`.`soft_delete` = 0";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();
        $banners = $stmt->fetchAll();

        return $banners;

        // var_dump($products);
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
        // var_dump($_picture);
        // die();

        // echo $_POST['title'];
        $_title = $_POST['title'];
        // $_bannerPicture = $_FILES['picture']['name'];
        $_link = $_POST['link'];
        $_promotionalMessage = $_POST['promotionalMessage'];
        $_bannerHTML = $_POST['bannerHTML'];
        if(array_key_exists('is_active', $_POST)){
            $_is_active = $_POST['is_active'];
        }
        else{
            $_is_active = 0;
        }

        $query = "INSERT INTO `banners` (`title`, `picture`, `link`,`promotional_message`,`html_banner`, `is_active`) VALUES (:title, :picture, :link, :promotionalMessage, :bannerHTML,:is_active)";

        $stmt = $this->conn->prepare($query);

        $stmt -> bindParam(':title', $_title);
        $stmt -> bindParam(':picture', $_picture);
        $stmt -> bindParam(':link', $_link);
        $stmt -> bindParam(':promotionalMessage', $_promotionalMessage);
        $stmt -> bindParam(':bannerHTML', $_bannerHTML);
        $stmt -> bindParam(':is_active', $_is_active);

        $result = $stmt -> execute();

        // var_dump($result);

        header("location:index.php");
    }

    public function show(){
        $_id = $_GET['id'];
    
        // var_dump($_GET);
        
        $query = "SELECT * FROM `banners` WHERE id= (:id)";
        
        $stmt = $this->conn->prepare($query);
        
        $stmt -> bindParam(':id', $_id);
        
        $result = $stmt -> execute();
        
        $banner = $stmt-> fetch();

        return $banner;
    }

    public function edit(){
        $_id = $_GET['id'];
        
        $query = "SELECT * FROM `banners` WHERE id= (:id)";
        
        $stmt = $this->conn->prepare($query);
        
        $stmt -> bindParam(':id', $_id);
        
        $stmt -> execute();
        
        $banner = $stmt-> fetch();

        return $banner;
    }

    public function update(){
        $approot = $_SERVER['DOCUMENT_ROOT']."/ARMAN/BASIS/PHP/CRUD/uploads/";

        $_id = $_POST['id'];
        $_title = $_POST['title'];
        $_promotionalMessage = $_POST['promotionalMessage'];
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

        $query = "UPDATE `banners` SET `title` = :title, `promotional_message` = :promotional_message, `is_active` = :is_active, `modified_at` = :modified_at, `picture` = :picture WHERE `banners`.`id` = :id";

        $stmt = $this->conn->prepare($query);

        $stmt -> bindParam(':id', $_id);
        $stmt -> bindParam(':title', $_title);
        $stmt -> bindParam(':promotional_message', $_promotionalMessage);
        $stmt -> bindParam(':is_active', $_is_active);
        $stmt -> bindParam(':modified_at', $_modified_at);
        $stmt -> bindParam(':picture', $_picture);

        $stmt -> execute();

        // var_dump($result);

        header("location: index.php");
    }

    public function trash(){
        $_id = $_GET['id'];

        $_soft_delete = 1;
        
        $query = "UPDATE `banners` SET `soft_delete` = :soft_delete WHERE `banners`.`id` = :id";
        
        $stmt = $this->conn->prepare($query);
        
        $stmt -> bindParam(':id', $_id);
        $stmt -> bindParam(':soft_delete', $_soft_delete);
        
        $result = $stmt -> execute();
        
        // $product = $stmt-> fetch();
        header("location: index.php");
    }

    public function trashIndex(){
        $query = "SELECT * FROM `banners` WHERE `banners`.`soft_delete` = 1";

        $stmt = $this->conn->prepare($query);

        $result = $stmt->execute();
        $banners = $stmt->fetchAll();

        // var_dump($products);
        return $banners;
    }

    public function restore(){
        $_id = $_GET['id'];

        $_soft_delete = 0;
        
        $query = "UPDATE `banners` SET `soft_delete` = :soft_delete WHERE `banners`.`id` = :id";
        
        $stmt = $this->conn->prepare($query);
        
        $stmt -> bindParam(':id', $_id);
        $stmt -> bindParam(':soft_delete', $_soft_delete);
        
        $stmt -> execute();
        
        // $product = $stmt-> fetch();
        header("location: trash_index.php");
    }

    public function delete(){
        $_id = $_GET['id'];
        
        $query = "DELETE FROM banners WHERE `banners`.`id` = :id";
        
        $stmt = $this->conn->prepare($query);
        
        $stmt -> bindParam(':id', $_id);
        
        $stmt -> execute();
        
        // $product = $stmt-> fetch();
        header("location: trash_index.php");
    }
}

?>