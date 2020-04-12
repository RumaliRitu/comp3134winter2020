<form method="GET">
    <div>
        <label for="firstName">First Name:</label>
        <input type="text" name="firstName">
   </div>

  <div class="submit">
       <input type="submit"  value="submit">
  <div>
</form>

<?php

if(isset($_GET["firstname"])){
$conn = new mysqli('host', 'User', 'pass', 'lab9');
if ($conn->connect_error) {
    die("Fatal: " . $conn->connect_error);
}
$query="SELECT * FROM users WHERE firstname=_GET['firstname'] AND active=1";

if($result=mysqli_query($conn,$query)){
    if(mysqli_num_rows($result)>0){
        echo "<table>";
           echo "<tr>";
              echo "<th>id</th>";
              echo "<th>username</th>";
              echo "<th>email</th>";
              echo "<th>firstname</th>";
              echo "<th>lastname</th>";
              echo "<th>active</th>";
           echo "</tr>";
        while($row=mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>".$row['firstname']."</td>";
                echo "<td>".$row['lastname']."</td>";
            echo "</tr>";
         }
         echo "</table>";
}
}

}

?>
