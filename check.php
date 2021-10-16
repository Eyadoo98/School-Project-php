<?php 
    session_start();
    
    @include 'head.php';
    @include 'nav.php';
    @include 'connect.php';
    @include 'js.php';
    
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $pass = isset($_POST['pass']) ? trim($_POST['pass']) : '';
    
    $query = "select * from login  WHERE name = '$name' and  pass = '$pass' limit 1";
    #$result = $connect->query($query);
    #$row = mysqli_fetch_assoc($result);
    #$count = mysqli_num_rows($result);
    
    
    $result = mysqli_query($connect,$query);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count == 1){
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        $_SESSION["human"] = $row['human'];
         
        if ($row['human'] == 1){
            header('Location: all_clases_for_specific_doc.php?id='.$row['id']);
            exit();
        }else if($row['human'] == 2){
            header('Location: user.php?id='.$row['id']);
            exit();
        }    
    }else{
        die('please login in');
    }
?>
<?php @include 'closer.php'; ?>