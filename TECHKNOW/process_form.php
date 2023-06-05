
<?php
include "conn.php";

$id = isset($_POST['id']) ? $_POST['id'] : "";
$Full_Name = isset($_POST['Full_Name']) ? $_POST['Full_Name'] : "";
$Email = isset($_POST['Email']) ? $_POST['Email'] : "";
$Contact = isset($_POST['Contact']) ? $_POST['Contact'] : "";
$Address = isset($_POST['Address']) ? $_POST['Address'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";



// Perform SQL insertion
$sql = "INSERT INTO customers VALUES ('$id','$Full_Name', '$Email', '$Contact', '$Address', '$password')";

if ($conn->query($sql) === TRUE) {
    header("location: index.php");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
