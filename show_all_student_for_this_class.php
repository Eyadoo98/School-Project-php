<?php 

    @include 'head.php';
    
    @include 'nav.php';
    
    
    @include 'connect.php';
    
//     $name_subject = $_GET['name_subject'];
//     echo $name_subject;
    
    $classId = $_GET['id'];
    
    $SQL = "select a.score,a.student_id,a.class_id, c.name from scores as a 
            inner join student_classes as b on (a.student_id = b.student_id) 
            inner join login as c on (a.student_id = c.id) 
            where a.class_id =  '$classId'
";
    
    $SQL = "select a.student_id,a.class_id,b.score,b.id as scoreId,c.name  
            from student_classes as a
            left join  scores as b on (a.student_id = b.student_id) 
            inner join login as c on (a.student_id = c.id) 
            where a.class_id =  '$classId'
";
   
    /*
    $sql = "SELECT name from login inner join student_classes on  
                    (login.id = student_classes.student_id)
                    where class_id = '$classId' ";*/
    $result = mysqli_query($connect, $SQL);
    
?>
<div style="height: 70px;"></div>
<h1 style="text-align: center;color: green;">All Student For This Class</h1>
<div style="height: 50px;"></div>

<a href="add_student.php?id=<?php echo $classId ?>" class="btn btn-success" style="float: right;margin-right: 20px;">Add Student</a>

<?php if(mysqli_num_rows($result) > 0):?>

    <table class="table">
       <tr>
       		<th>Student Name</th>
       		<th>Mark</th>
       		<th><!DOCTYPE html>
<html>
	<head>
	<title>Page Title</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	</head>
<body>
       			<input type="hidden" value="<?=$classId?>" id="classId" /> 
       		</th>
       </tr>
      
	<?php $i = 1; ?>
	<?php while ($row = mysqli_fetch_assoc($result)):?>
    	<tr>
        	<td><?php echo $row['name'];?></td>
        	<td>
        		<input type="text" value="<?=$row['score'] ?>" name="score" id="scoretxt_<?=$i?>" />
        		<input type="hidden" name="score_id" id="score_id_<?=$i?>" value="<?=$row['scoreId'] ?>" />
        		<input type="hidden" name="student_id" id="student_id_<?=$i?>" value="<?=$row['student_id'] ?>" />
        		
        	</td>
        	<td>
        		<button class="btn btn-primary save-score-btn" data-i="<?=$i?>">
        			Save
        		</button>
        	</td>
      	</tr>
    <?php $i++; ?>
   <?php endwhile;?>
	 </table>
	  <p id="test"></p>

<?php endif;?>

<?php @include 'closer.php'; ?>
