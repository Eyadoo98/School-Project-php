<?php 
    @include 'connect.php';
  
    //For Validation
    $score_ID = isset($_POST['score_ID']) ? intval($_POST['score_ID']) : 0 ;
    $studentId = isset($_POST['studentId']) ? intval($_POST['studentId']) : 0 ;
    $score = isset($_POST['score']) ? intval($_POST['score']) : 0 ;
    $classId = isset($_POST['classId']) ? intval($_POST['classId']) : 0 ;
    //$name_subject = $_POST['name_subject'];
    
//     $operation = 'insert';
//     if( $score_ID > 0 ){
//         $operation = 'update';
//     }
    
    
//     if( $operation == 'insert'){
//         $SQL = " insert into scores ( class_id, student_id , score) values ( '$classId')";
//         $result = mysqli_query($connect, $query);
//         if($result){
//             die('insert');
//         }else{
//             die('error');
//         }
//     }else{
//         $SQL = "update";
//         $result = mysqli_query($connect, $query);
//         if($result){ die('insert'); }
//         else{ die('error');}
//     }
    
    
        
    
    
    if(intval($score_ID) == 0) {        
        
        $query = "INSERT INTO scores (class_id, student_id, score)
        VALUES ('$classId', '$studentId', '$score')";
        
        $result = mysqli_query($connect, $query);
        if($result){
            echo "Insert";
        }else{
            echo "error in insert";
        }
    }
    
    if(intval($score_ID) != 0){
        $sql = "UPDATE scores SET score ='$score' WHERE student_id='$studentId'";
        $result = mysqli_query($connect, $sql);       
        if($sql){
            echo "Update Success";
        }else{
            echo "Error While Update";
        }
    }
    
    
?>