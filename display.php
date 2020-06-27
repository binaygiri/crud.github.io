<?php

include('config.php');

if(isset($_GET['page']))
{
$page = $_GET['page'];

}else{
  $page=1;
}
$num_per_page = 03;
$start_from = ($page-1)*03;
$query = "SELECT * FROM student limit $start_from, $num_per_page";
$result =mysqli_query($con,$query);
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
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <style type="text/css">
  	.fa{
  		font-size: 20px;
  		padding: 5px;


  	}
    
  </style>
</head>
<body>
    <div class="container">
    	 <div class="col-lg-12">
    	 	 <table class="table table-hover table table-striped">
    	 	 	<a href="index.php" class="btn btn-success">Back to Insert</a>
    	    <div class="card">
              <div class="card-header bg-dark">
                   <h2 class="text-white text-center">Dispaly Data</h2>
              </div> 
          </div>
    	 	 	<thead>
    	 	 		<tr>
    	 	 			<th>Id</th>
    	 	 			<th>Name</th>
    	 	 			<th>email</th>
    	 	 			<th>mobile</th>
    	 	 			<th>degree</th>
    	 	 			<th>refer</th>
    	 	 			<th>lang</th>
    	 	 			<th colspan="2">Action</th>
    	 	 		</tr>
    	 	 	</thead>
    	 	 	<tbody>
    	 	 		<?php 
                  
                  while($row = mysqli_fetch_assoc($result)){ 
    	 	 		?>
    	 	 		<tr>
    	 	 			<td><?php echo $row['id'];        ?></td>
    	 	 			<td><?php echo $row['name'];      ?></td>
    	 	 			<td><?php echo $row['email'] ;    ?></td>
    	 	 			<td><?php echo $row['mobile'] ;   ?></td>
    	 	 			<td><?php echo $row['degree'] ;   ?></td>
    	 	 			<td><?php echo $row['refer'] ;    ?></td>
    	 	 			<td><?php echo $row['lang'] ;     ?></td>
    	 	 			<td><a href="update.php?id=<?php echo $row['id']; ?>"><i class="fa fa-edit"></i></a></td>
    	 	 			<td><a href="delete.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></a></td>
    	 	 		</tr>

    	 	 		<?php
                    }
    	 	 		?>
    	 	 	</tbody>
    	 	 </table>
            <?php

        $pr_query = "select * from student";
        $pr_result =mysqli_query($con,$pr_query);
        $total_record =mysqli_num_rows($pr_result);
        ///echo $total_record;
        $total_page = ceil($total_record/$num_per_page);
        if($page>1){
        echo'<a href="display.php?page='.($page-1).'" class="btn btn-success">Previous</a> ';
        }
        
        for($i=1;$i<$total_page;$i++){
        echo'<a href="display.php?page='.$i.'" class="btn btn-primary">'.$i.'</a> ';
        }
        if($i>$page){
        echo'<a href="display.php?page='.($page+1).'" class="btn btn-success">Next</a>';
        }
        
        ?>
        

    	 </div>
    </div>
</body>
</html>