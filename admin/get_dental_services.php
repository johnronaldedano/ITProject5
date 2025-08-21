<?php
include '../db_connect.php';
$result = mysqli_query($conn, "SELECT dental_service FROM tbl_service");
$services = [];
while ($row = mysqli_fetch_assoc($result)) {
    $services[] = $row;
}
header('Content-Type: application/json');
echo json_encode($services);
?>