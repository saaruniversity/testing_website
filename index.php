<?php include ("header.php"); ?>

<div><p>Something is here!</p> </div>


<?php
$query = "SELECT first_name, last_name "
     . "FROM employees";
$result = $db->query($query);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row["last_name"]) . "</td>";
    echo "<td>" . htmlspecialchars($row["first_name"]) . "</td>";
    echo "</tr>";
}
$result->closeCursor();
?>


<?php include ("footer.php"); ?>
