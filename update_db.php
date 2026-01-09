<?php
include 'db_connect.php';

// Add UNIQUE constraint to email column
$sql = "ALTER TABLE registrations ADD UNIQUE (email)";

if ($conn->query($sql) === TRUE) {
    echo "Successfully added UNIQUE constraint to email column.";
} else {
    echo "Error updating database: " . $conn->error;
}

$conn->close();
?>
