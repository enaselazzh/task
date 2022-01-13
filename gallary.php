<?php 

if($_SERVER['REQUEST_METHOD']=="POST"){ 
  $id=$_POST['id']; 
  
}else { 
  $id=$_GET['id']; 
  // $sub_category    = $_GET['sub-category'] ;

}


?>

<!-- <!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Image Gallery Bootstrap with Isotope</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/prettyphoto/3.1.6/css/prettyPhoto.css'>
<link rel="stylesheet" href="themes/css/style.css">

</head>
<body>
   -->

    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
<div class="container">
<?php $cate_result = getSubCategory($conn, $id); 
if($cate_result->num_rows >0 ) {  ?>
<div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary">Left</button>
 
  
  <!--filtering-->
<?php 



  while($cate_row = $cate_result->fetch_assoc()) { 
    if($cate_row['name']!="") { 

      
 
?>


<button type="button" class="btn btn-secondary"data-filter=".<?= $cate_row['name']; ?>"><?= $cate_row['name']; ?>>Right</button>
</div>



 <?php
    }
}
}else { 


?> 

<!-- When RESULT EMPTY  -->
<div class="alert alert-warning" role="alert">
 0 result .
</div>



<?php } ?>
</div>

  <div class="grid">
    <div class="grid-sizer col-xs-12 col-sm-6 col-md-4 col-lg-4"></div>

    <?php 

    
    $result = getContent($conn, $id);
    
    if($result->num_rows > 0 ) { 
      while($row=$result->fetch_assoc()){ 
        if($row['images']!= "") { 

        
    ?>

    <div  class="col-xs-12 col-sm-6 col-md-4 grid-item <?= $row['name']; ?>"><a class="prettyphoto" href="<?= $row['images']; ?>"  rel="prettyPhoto[portfolio]"><img  class="thumbnail img-responsive " src="../sub-admin/uploads_image/<?= $row['images']; ?> "  alt=" <?= $row['name']; ?>"></a></div>

<?php    }
    } 
  }
       ?>

   
  </div>





</div>
<!-- partial -->

