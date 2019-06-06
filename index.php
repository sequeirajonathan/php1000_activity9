

<?php


 include 'conection.php';

$sql = "SELECT * FROM  students order by code, country";
$result = $conn->query($sql);
?>

<style>
table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
}
th, td {
  padding: 15px;
  text-align: left;
}
</style>

<?php

if ($result->num_rows > 0) {

  ?>
    <table>
      <th>Class </th>
      <th>Name </th>
      <th>Contry</th>
     
    <?php 
    while ($row = $result->fetch_assoc()) {
        $name = $row["name"];
        $country = $row["country"];
        $code = $row["code"];
        ?>
         <tr>
        <td><?=$code;?></td>
        <td><?=$name;?> </td>
        <td><?=$country;?></td>
        </tr>
     <?php      
    }
} else {
    echo "0 results";
}
$conn->close();

