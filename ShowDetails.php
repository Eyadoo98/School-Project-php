<?php 
    @include 'head.php';
    @include 'nav.php';
    @include 'connect.php';
    @include 'js.php';
    $id = $_GET['id'];
    //echo $id;
    $orginalID = $_GET['orginalID'];
    //echo $n." <br>";
    
    $query = "SELECT * from clases where id = '$id'";
    $result = mysqli_query($connect, $query);
    
    $sql = "SELECT * from login where id = '$orginalID'";
    $res = mysqli_query($connect, $sql);
    //echo  $id;
?>
<div style="height: 80px;"></div>
<h1 style="text-align: center; color: red;">Details Page</h1>

<div style="height: 80px;"></div>


<?php if(mysqli_num_rows($res) > 0):?>
	<?php while ($row = mysqli_fetch_assoc($res)):?>
		<h2 style="text-align: center;"> Doctor Name is : <?php echo $row['name']?></h2>
	<?php endwhile;?>
<?php endif;?>



<?php if(mysqli_num_rows($result) > 0):?>

	<?php while ($row = mysqli_fetch_assoc($result)):?>
		
		
		<h2 style="text-align: center;"> Name Of Class: <?php echo $row['class_name']?></h2>
		<h2 style="text-align: center;"> Descroption: <?php echo $row['class_info']?></h2>
		
	<?php endwhile;?>

<?php endif;?>

<?php @include 'closer.php';?>