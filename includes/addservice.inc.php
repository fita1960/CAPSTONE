<?php

require('connect.inc.php');
 
$targetDir = "../img/service/"; 
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(!empty($_FILES["file"]["name"])){ 

        $service_name =  $_POST['service_name'];
        $service_description = $_POST['service_description'];

        $fileName = basename($_FILES["file"]["name"]); 
        $targetFilePath = $targetDir . $fileName; 
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 
     
        // Allow certain file formats 
        $allowTypes = array('JPG','PNG','JPEG','GIF','WEBP','jpg','png','jpeg','gif','webp'); 

        if(in_array($fileType, $allowTypes)){ 
            // Upload file to server 
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                // Insert image file name into database 
                $sql = "INSERT INTO services (service_name, service_description, service_image) VALUES ('$service_name', '$service_description', '$fileName')";
                if(mysqli_query($conn, $sql)){ 
                    header("Location: ../adm_service.php");
                }else{ 
                    header("Location: ../adm_service.php");
                }  
            }else{ 
                header("Location: ../adm_service.php");
            } 
        }else{ 
            header("Location: ../adm_service.php");
        } 
    }else{ 
        header("Location: ../adm_service.php");
    } 
} 

   
    