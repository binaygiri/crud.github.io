<?php
include('config.php');
if(isset($_POST['insert'])){
$name = mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$mobile = mysqli_real_escape_string($con,$_POST['mobile']);
$degree = mysqli_real_escape_string($con,$_POST['degree']);
$refer =mysqli_real_escape_string($con, $_POST['refer']);
$lang = mysqli_real_escape_string($con,$_POST['lang']);

$qry = "INSERT INTO `student`(`name`, `email`, `mobile`, `degree`, `refer`, `lang`) VALUES ('$name','$email ','$mobile','$degree','$refer','$lang')";

$run = mysqli_query($con,$qry);

if($run){

  ?>
    <script type="text/javascript">
      alert('insert successfull');
      window.location ='<?=basename($_SERVER['PHP_SELF'])?>';
      window.location ='display.php';
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
              <div class="card-header bg-dark"> 
                  <h2 class="text-center text-white">INSERT DATA</h2>
              </div>

           </div>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" onsubmit="return validation()">
                 <div class="form-group">
                   <label>Name</label>
                   <input type="text" name="name" class="form-control" id="name">
                   <span id="spname" class="font-weight-bold"></span>
                 </div>
                  <div class="form-group">
                   <label>Email</label>
                   <input type="text" name="email" class="form-control" id="email">
                   <span id="spemail" class="font-weight-bold"></span>
                 </div>
                  <div class="form-group">
                   <label>Mobile</label>
                   <input type="text" name="mobile" class="form-control" id="mobile">
                   <span id="spmobile" class="font-weight-bold"></span>
                 </div>
                  <div class="form-group">
                   <label>Degree</label>
                   <input type="text" name="degree" class="form-control" id="degree">
                   <span id="spdegree" class="font-weight-bold"></span>
                 </div>
                  <div class="form-group">
                   <label>Refer</label>
                   <input type="text" name="refer" class="form-control" id="refer">
                   <span id="sprefer" class="font-weight-bold"></span>
                 </div>
                  <div class="form-group">
                   <label>Lang</label>
                   <input type="text" name="lang" class="form-control" id="lang">
                   <span id="splang" class="font-weight-bold"></span>
                 </div>
                <div class="form-group">
                   <button type="submit" name="insert" class="btn btn-primary">Submit</button>
                 
                </div>
                 
            </form>

        </div>
    </div>
</body>
</html>

<script type="text/javascript">

function validation(){
var name = document.getElementById('name').value;
var email = document.getElementById('email').value;
var mobile = document.getElementById('mobile').value;
var degree = document.getElementById('degree').value;
var refer = document.getElementById('refer').value;
var lang = document.getElementById('lang').value;


if(name == ""){
    document.getElementById('spname').innerHTML =" ** Please fill the name field";
    return false;
  }

 if(email == ""){
    document.getElementById('spemail').innerHTML =" ** Please fill the name field";
    return false;
    }

  if(email.indexOf('@') <= 0 ){
        document.getElementById('spemail').innerHTML =" ** @ Invalid Position";
        return false;
      }

  if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
        document.getElementById('spemail').innerHTML =" ** . Invalid Position";
        return false;
    }


    if(mobile == ""){
        document.getElementById('spmobile').innerHTML =" ** Please fill the mobile Number field";
        return false;
      }
      if(isNaN(mobile)){
        document.getElementById('spmobile').innerHTML =" ** user must write digits only not characters";
        return false;
      }
      if(mobile.length!=10){
        document.getElementById('spmobile').innerHTML =" ** Mobile Number must be 10 digits only";
        return false;
      }

   if(degree == ""){
    document.getElementById('spdegree').innerHTML =" ** Please fill the degree field";
    return false;
  }
  
  if(refer == ""){
    document.getElementById('sprefer').innerHTML =" ** Please fill the refer field";
    return false;
  }

  if(lang == ""){
    document.getElementById('splang').innerHTML =" ** Please fill the lang field";
    return false;
  }

   


}
</script>