<?php 
session_start();
@include 'head.php';
@include 'nav.php';
@include 'connect.php';
    
    $id = isset($_GET['id']) ? intval($_GET['id']):0;
    
     
/*
    $query = "select name from login where id = '$id'";    
    $result = mysqli_query($connect, $query);
   */ 
    
  
    
    $SQL = "select a.score , b.class_name , b.id ,c.class_id 
           from scores as a
           left join clases as b on (b.id = a.id) 
           inner join student_classes as c on (b.id = c.class_id)    
            where c.class_id =  '10'";
    
    $SQL = "select a.class_name , b.score , b.class_id from clases as a 
            inner join scores as b 
            on (a.id = b.class_id) 
            where student_id = '$id'
            ";
    //$SQL = "";
    $res = mysqli_query($connect, $SQL);
    $result = mysqli_query($connect, $query);
    
    //die($SQL);
    
    
    ?>
 <!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<div style="height: 80px;"></div>

<?php if (mysqli_num_rows($result) > 0):?>

	
	<?php while ($row = mysqli_fetch_assoc($result)):?>
		
		<h1 style="text-align: center;">Student Page for <?php echo $_SESSION["name"] ?> </h1>
		

	<?php endwhile;?>
<?php endif;?>


<?php if (mysqli_num_rows($res) > 0):?>
	<table class="table">
			<tr>
    			<th>Subject</th>
    			<th>Mark</th>
			</tr>
	<?php while ($row = mysqli_fetch_assoc($res)):?>
	
		
			<tr>
    			<td><span><?php echo $row['class_name']?></span></td>
    			<td><?php echo $row['score']?></td>
			<tr>
							
	<?php endwhile;?>


</table>
<?php endif;?>
</body>
</html> 



<?php @include 'closer.php'; ?>