<!-- <div class="d-flex justify-content-between"> -->
<?php
    
   if(@$navbarTrans){?>
   <nav class="navbar navbar-expand-lg navbar-dark fixed-top  " id="mainColor">
<?php
   }else{?>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<?php
   }
?>  
   <div>
   <a class="navbar-brand" href="#"><img src="img/img10.png" alt=""></a>
  </div> 
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse  justify-content-end" id="navbarSupportedContent">
  <input type="text" id="search" placeholder="Search" />
   <!-- <br /> -->
   <div id="display"></div>
    
    <ul class="navbar-nav ">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        
      </li>
   
    <?php foreach (getCategory($conn) as $val){
       $_SESSION[$val['name']] = $val['name'];
      ?>
       
      <li class="nav-item">
        <a class="nav-link" href="#<?php echo $val['name']?>"><?php echo $val['name']?></a>
  </li>
  <?php }?>



      <?php if(!isset($_SESSION['id1'])){?>

     
      <li class="nav-item">
        <a class="nav-link" href="../login/index.php">Login | Register</a>
      </li>
   <?php }else{?>
      <li class="nav-item dropdown mr-5">
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
      
        <?php  $array= getImageUser($conn,$_SESSION['id1']);  
             if($array['profile_pic'] != "NULL"){
             echo' <img src="images/'.$array['profile_pic'].'" alt="" class="pic_profile" style=" width: 33px;  border: 1px solid;
              border-radius: 15px; height: 33px;">';
             }else{
             echo' <img src="img/avater.png" alt="" class="pic_profile" style=" width: 33px;  border: 1px solid;
              border-radius: 15px; height: 33px;">';
             }
        ?> 
    <?php echo $_SESSION['username']?> 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="editprofile.php">Edit Profile </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
      <?php }?>

   
   
    </ul>
    
  </div>

  
</nav> 
<!-- </div> -->
