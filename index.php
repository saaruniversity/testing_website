<?php include ("header.php"); ?>

<div><p>Something is here!</p> </div>

<?php
$db = pg_connect("host=ec2-107-21-229-87.compute-1.amazonaws.com port=5432 dbname=d4f6m4r9oo8790 user=qdlwaqfognpves password=9bVaZL0EyHA9GAI0sV_dJs4wTW");  
$result = pg_query($db, "SELECT first_name, last_name FROM employees limit 1");  
$row = pg_fetch_assoc($result);  
echo "<p>Done! $row[first_name]</p>"
?>
<?php include ("footer.php"); ?>
