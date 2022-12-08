<?php include("config/functions.php");
if(isset($_GET['src'])){
    $src = $_GET['src'];
    $id = $_GET['id'];
    $page = $_GET['page'];
  }
  
  $delete = _delete("$page","id=$id");
  if($delete){
    $msg = "Delete Successfully";
    header("location:$src.php?msg=$msg");
  }
?>