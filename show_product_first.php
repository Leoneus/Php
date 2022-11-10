<?php
$servername="localhost";
$username="root";
$password="12341234";
$dbname="shop";
$per_page=2;
if(isset($_GET["page"])) $start_page=$_GET["page"]*$per_page;
else $start_page=0;
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con) die("Connnect mysql database fail!!".mysqli_connect_error());
echo "Connect mysql successfully!";
$sql="SELECT * FROM product";
$result=mysqli_query($con,$sql);
$numrow=mysqli_num_rows($result);
echo "<br>".$numrow." Records<br>";
for($i=0;$i<ceil($numrow/$per_page);$i++)
    echo "<a href='show_product.php?page=$i'>[".($i+1)."]</a>";
$sql="SELECT * FROM product LIMIT $start_page,$per_page";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    
    echo "<table border=1><tr><th>id</th><th>name</th><th>description</th><th>price</th></tr>";
    while($row=mysqli_fetch_assoc($result)){
    echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>";
    echo $row["description"]."</td><td>".$row["price"]."</td></tr>";
    }
    echo "</table>";
}else{
    echo "0 results";
}
mysqli_close($con);
?>