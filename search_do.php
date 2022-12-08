<?php

    require("../includes/dtabase_connect.php");
   
    $blood = $_POST['blood'];
    $address = $_POST['address'];

   $sql="select * from blood_donation where (address='".$address."' && blood='".$blood."')";
        
echo " <center><table border='1px'><tr><th>First Name </th>";
echo " <th>Last Name </th>";
echo " <th>D.O.B </th>";
echo " <th>Age</th>";
echo " <th>Email </th>";
echo " <th>Gender </th>";
echo " <th>Phone</th>";
  
        $result = mysqli_query($conn,$sql);
	
if($result->num_rows>0){
while($row=$result->fetch_assoc()){

echo " <tr><td>".$row["first_name"]."</td><td>".$row["last_name"]."</td><td>".$row["d_o_b"]."</td><td>".$row["age"]."</td><td>".$row["email"]."</td><td>".$row["gender"]."</td><td>".$row["phone"]."</td></tr>" ;

}
echo "</table></center>";
}
else
{
?>
	<script type="text/javascript">alert('No data found !!!');</script>
<?php	
	echo" NO RESULTS! ";
}

           
        mysqli_close($conn);
    ?>