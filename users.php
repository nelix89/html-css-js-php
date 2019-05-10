<?php
include 'baza.php'; 


$query = "SELECT id, first_name, last_name, user_name, email, active FROM users";
$result = mysqli_query($conn, $query);




if(mysqli_num_rows($result) >= 1){
 while($row = mysqli_fetch_array($result)){



    printf ("<html>
    <table>
    <tr>
        <td>%s</td>
        <td>%s</td> 
        <td>%s</td>
        <td>%s</td>
        <td>%s</td> 
        <td>%s</td>
      </tr>
    </table>
    </html>
    ",$row["id"],$row["first_name"],$row["last_name"],$row["user_name"],$row["email"],$row["active"]);
    
 }
}
 ?>
