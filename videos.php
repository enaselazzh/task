<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){ 
  $id=$_POST['id']; 
  
}else { 
  $id=$_GET['id']; 

}

  
?>


<div class="container">

  
<div class="btn-group btn-group-justified filter-button-group" role="group" aria-label="filterImages">
<div class="btn-group" role="group">
    <button type="button" class="btn btn-default is-checked" >VIDEOS</button>
  </div>
  </div>


<div class="row">
  
  <?php 

  $result = getVideo($conn, $id);

  if($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()){ 
      if($row['video']!='NULL'){ 

   ?>
<!-- HERE IS THE VIDEO  -->

<div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
  <video class="video-fluid z-depth-1  w-100 shadow-1-strong rounded mb-4"  controls>
  <source src="../sub-admin/uploads_video/<?= $row['video'];?>" type="video/mp4" />
 </video>

</div>
<!-- End  THE VIDEO  -->
<?php } 

}
}else { 


?>

<!-- When RESULT EMPTY  -->
<div class="alert alert-warning" role="alert">
 0 result .
</div>
<?php } ?>
 </div>
</div>








   
   