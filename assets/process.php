<?php
include('./database/connection.php');
if(isset($_POST["submit1"])){
  $serial_no = mysqli_real_escape_string($conn, strip_tags($_POST['serial_no']));
  $engrave_no = mysqli_real_escape_string($conn, strip_tags($_POST['engrave_no']));
  $brand = mysqli_real_escape_string($conn, strip_tags($_POST['brand']));
  $model = mysqli_real_escape_string($conn, strip_tags($_POST['model']));
  $ram = mysqli_real_escape_string($conn, strip_tags($_POST['ram']));
  $storage = mysqli_real_escape_string($conn, strip_tags($_POST['storage']));
  $funder = mysqli_real_escape_string($conn, strip_tags($_POST['funder']));
  $financial_year = mysqli_real_escape_string($conn, strip_tags($_POST['financial']));

   $sql = "INSERT INTO desktop(deck_serial_no, engrave_no, brand, model, ram, storage, funder, financial_year, status)
    VALUES('$serial_no', '$engrave_no', '$brand', '$model', '$ram', '$storage', '$funder', '$financial_year', 'Available')";
    $query = mysqli_query($conn, $sql);
    if($query){
      echo '<span class = "alert alert-success">Desktop Data Inserted successfully</span>';

    }else{
      echo '<span class = "alert alert-danger">Data not inserted</span>';
    }


}
 ?>
