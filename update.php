
<?php
include('config.php');

  
 $id = $_GET['id'];

 $qry = "SELECT * FROM `student` WHERE `id`='$id'";

 $run = mysqli_query($con,$qry);

 $result = mysqli_fetch_assoc($run);
  
  
if(isset($_POST['update'])){
$name = mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$mobile = mysqli_real_escape_string($con,$_POST['mobile']);
$degree = mysqli_real_escape_string($con,$_POST['degree']);
$refer =mysqli_real_escape_string($con, $_POST['refer']);
$lang = mysqli_real_escape_string($con,$_POST['lang']);

$qry = "UPDATE `student` SET `id`='$id',`name`='$name',`email`='$email',`mobile`='$mobile',`degree`='$degree',`refer`='$refer',`lang`='$lang' WHERE `id`='$id'";

$run = mysqli_query($con,$qry);

if($run){

  ?>
    <script type="text/javascript">
      alert('update successfull');
      window.location='display.php';
    </script>

  <?php
}else{
    
    ?>
    <script type="text/javascript">
      alert('failled connection');
    </script>

  <?php

}



}





?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">
        
        <div class="col-lg-8 m-auto">
           <div class="card">
              <div class="card-header bg-info"> 
                  <h2 class="text-center text-white">INSERT DATA</h2>
              </div>

           </div>
            <form action="" method="post">

                 <div class="form-group">
                   <label>Name</label>
                   <input type="text" name="name" class="form-control"  value="<?php echo $result['name']  ?>">
                 </div>
                  <div class="form-group">
                   <label>Email</label>
                   <input type="text" name="email" class="form-control" value="<?php echo $result['email']  ?>">
                 </div>
                  <div class="form-group">
                   <label>Mobile</label>
                   <input type="text" name="mobile" class="form-control" value="<?php echo $result['mobile']  ?>">
                 </div>
                  <div class="form-group">
                   <label>Degree</label>
                   <input type="text" name="degree" class="form-control" value="<?php echo $result['degree']  ?>">
                 </div>
                  <div class="form-group">
                   <label>Refer</label>
                   <input type="text" name="refer" class="form-control" value="<?php echo $result['refer']  ?>">
                 </div>
                  <div class="form-group">
                   <label>Lang</label>
                   <input type="text" name="lang" class="form-control" value="<?php echo $result['lang']  ?>">
                 </div>
                <div class="form-group">
                   <button type="submit" name="update" class="btn btn-primary">update</button>
                </div>
            </form>

        </div>
    </div>
</body>
</html>