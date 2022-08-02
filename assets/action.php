<?php
   if(isset($_POST["action"])){
     include('../database/connection.php');

     if($_POST["action"] == 'fetch'){
       $output = '';
       $query = "SELECT * FROM desktop";
       $run = mysqli_query($conn, $query);
       $result = mysqli_fetch_all($run, MYSQLI_ASSOC);
       //$result = mysqli_fetch_array($run);

       $output .= '
             <table class = "table table-bordered table-striped">
             <tr>
                <td>Serial No</td>
                <td>Engravement Key</td>
                <td>Brand</td>
                <td>Model</td>
                <td>Ram size</td>
                <td>Storage Size</td>
                <td>Funder</td>
                <td>Financial Year</td>
                <td>Status</td>
                <td>Action</td>
             </tr>
       ';

         foreach($result as $row){
           $status = '';
           if($row["status"] == 'Available'){
             $status = '<span class = "btn btn-success">Available</span>';
           }else{
             $status = '<span class = "btn btn-danger">Dispatched</span>';
           }

           $output .= '
              <tr>
                 <td>'.$row["deck_serial_no"].'</td>
                 <td>'.$row["engrave_no"].'</td>
                 <td>'.$row["brand"].'</td>
                 <td>'.$row["model"].'</td>
                 <td>'.$row["ram"].'</td>
                 <td>'.$row["storage"].'</td>
                 <td>'.$row["funder"].'</td>
                 <td>'.$row["financial_year"].'</td>
                 <td>'.$status.'</td>
                 <td><button type = "button" name = "action"
                 class = "btn btn-info btn-xs action"
                  data-deck_serial_no = "'.$row["deck_serial_no"].'" data-status = "'.$row["status"].'">Dispatch</button></td>

              </tr>
           ';
         }
         $output .='</table>';
         echo $output;
     }
   }
 ?>
