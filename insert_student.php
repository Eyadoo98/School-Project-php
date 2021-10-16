<?php 

    @include 'connect.php';
    @include 'js.php';
    
    $name = $_POST['name'];//ID For Student
    $id = $_GET['id'];//For Remove
    
    
    echo $name. " "; //Print Id For Specific Student
    
    $sql = "select * from login where id = $name ";//Fetch Name From DB
    $result = mysqli_query($connect, $sql);
    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
            //echo $row['name'] . " ";
            
            $insert = "INSERT INTO student_classes (class_id , student_id)
            VALUES ('$id','$row[id]')";
            
            if(mysqli_query($connect, $insert)){
               header('Location:show_all_student_for_this_class.php?id='.$id);
                                
            }else{
                echo "insert wrong";               
            }
        }
    }
   
  
    
    
   
    
 ?>

