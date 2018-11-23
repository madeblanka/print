<?php
// include database connection file
include_once("config.php");

// Get id_jadwal from URL to delete that user
$id_jadwal = $_GET['id_jadwal'];

// Delete user row from table based on given id_jadwal
$result = mysqli_query($mysqli, "DELETE FROM jadwal WHERE id_jadwal=$id_jadwal");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:jadwal.php");
?>
