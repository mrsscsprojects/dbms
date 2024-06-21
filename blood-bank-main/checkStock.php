<?php

$sql = "SELECT * FROM Stock";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Availability</h2><br>";    
    echo "<table><tr><th>Blood Group</th><th>Units of blood </th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["s_blood_group"]. "</td><td>" . $row["s_quantity"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "<p>No blood stock available.</p>";
}
?>
