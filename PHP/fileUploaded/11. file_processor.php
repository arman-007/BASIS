<pre>
    <?php
        print_r($_FILES);

        echo "<br>";
        
        if(isset($_FILES['my_file'])){
            echo "<p> File Name: ".$_FILES['my_file']['name']. "</p>";
            echo "<p> File Type: ".$_FILES['my_file']['type']. "</p>";
            echo "<p> File Location: ".$_FILES['my_file']['tmp_name']. "</p>";
            echo "<p> File Size: ".$_FILES['my_file']['size']/1024, " kB </p>";
        }
        
        echo "<br>";
        
        if($_FILES['my_file']['type'] == "image/jpeg"){
            echo "Thanks for uploading your picture";
        }
        else{
            echo "Invalid file format";
        }
        echo "<br>";
        
        $target = $_FILES['my_file']['tmp_name'];
        
        $destination = "Uploads/".$_FILES['my_file']['name'];
        
        $is_file_moved = move_uploaded_file($target, $destination);

        if($is_file_moved){
            echo "File moved successfully";
        }
        else{
            echo "File is not moved.";
        }
        ?>
</pre>