<!DOCTYPE html>
<html>
  <head>
    <title>Majors</title>
  </head>
  <body>
    <table>
      <tr>
        <th>Majors</th>
        <form name="form1" method="get" action="search.php">
          <input type="text" placeholder="Search Major" name="search" aria-label="Search">
          <input type="submit" value="Search" name="submit"></input>
        </form>
      </tr>
      <?php
        $conn = mysqli_connect("localhost", "root", "", "Universities");
        if($conn-> connect_error){
          die("Connection failed:".$conn-> connect_error);
        }
        $sql = "SELECT DISTINCT major from university ORDER BY major";
        $result = $conn-> query($sql);
        if ($result -> num_rows >0){
          while($row = $result->fetch_assoc()){
            echo "<tr><td>". $row["major"]. "</td><tr>";
          }
          echo "</table>";
        }
        else{
          echo "0 result";
        }
        $conn->close();
      ?>
    </table>
  </body>
</html>
