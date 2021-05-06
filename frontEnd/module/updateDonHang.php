<?php 

if (!empty($_GET['idtt'])) {
  $idtt=$_GET['idtt'];
  $con->query("UPDATE `nn_order` SET `status` = '-1' WHERE `nn_order`.`id_order` = {$idtt};");
  
}
header("location:?mod=thongtinKH");


 ?>