<?php 
    session_start();
     
    @include 'head.php';
    @include 'nav.php';
    @include 'connect.php';
    @include 'js.php';

      //print_r($_SESSION);
  
   
    if ( isset($_SESSION['human']) and intval($_SESSION['human']) == 1 ){
        header('Location: all_clases_for_specific_doc.php?id='.$_SESSION['id']);
        exit();
    }else if (isset($_SESSION['human']) and intval($_SESSION['human']) == 2 ){
        header('Location: user.php?id='.$_SESSION['id']);
        exit();
    } 
?>

<div style="height: 70px;"></div>
<div class="container">
    <form action="check.php" method="post" >
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input name="name" type="text" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input name="pass" type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>    

<div style="height: 180px;"></div>





<?php 
    @include 'footer.php';
    ?>
<?php @include 'closer.php'; ?>