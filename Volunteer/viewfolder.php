<?php
    include_once('config.php');
    session_start();
$userID=$_SESSION['userID'];
$_SESSION['login'] = true;
    echo '<script>console.log("masuk ajax");</script>';
    if(isset($_POST["volun_id"]))  
    { 
          
        $sql = "SELECT * FROM volunteer WHERE idnumber = '".$_POST["volun_id"]."'";
        $result = $conn->query($sql);
        $output = ''; 
        $output .= '
        <div class="table-responsive">  
        <table class="table table-bordered">';  
      while($row = $result->fetch_assoc())  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["name"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Age</label></td>  
                     <td width="70%">'.$row["age"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Occupation</label></td>  
                     <td width="70%">'.$row["occupation"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Phone No.</label></td>  
                     <td width="70%">'.$row["phonenum"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>E-mail</label></td>  
                     <td width="70%">'.$row["email"].'</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Address</label></td>  
                     <td width="70%">'.$row["address"].'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Preferred Role</label></td>  
                     <td width="70%">'.$row["preferredRole"].'</td>  
                </tr>   
                ';  
      }  
      $output .= '</table></div>';  
      echo $output;  
    }
?>