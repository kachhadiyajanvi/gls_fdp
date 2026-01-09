<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and Validate Inputs
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $name = htmlspecialchars(trim($_POST['name']));
    $mobile = htmlspecialchars(trim($_POST['mobile']));
    $gender = htmlspecialchars(trim($_POST['gender']));
    $dob = htmlspecialchars(trim($_POST['dob']));
    $institute = htmlspecialchars(trim($_POST['institute']));
    $university = htmlspecialchars(trim($_POST['university']));
    $experience = htmlspecialchars(trim($_POST['experience']));

    // Server-side validation example
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid Email format'); window.location.href='index.php';</script>";
        exit();
    }

    // Strict Validation
    if (empty($email) || empty($name) || empty($mobile) || empty($gender) || empty($dob) || empty($institute) || empty($university) || empty($experience)) {
        http_response_code(400);
        echo "All fields are required.";
        exit();
    }

    // Check Duplicate Email
    $checkStmt = $conn->prepare("SELECT id FROM registrations WHERE email = ?");
    $checkStmt->bind_param("s", $email);
    $checkStmt->execute();
    $checkStmt->store_result();
    
    if ($checkStmt->num_rows > 0) {
        http_response_code(409); // Conflict
        echo "Email already registered!";
        $checkStmt->close();
        exit();
    }
    $checkStmt->close();

    // Prepare and Bind
    $stmt = $conn->prepare("INSERT INTO registrations (email, full_name, mobile, gender, dob, institute, university, experience) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    
    if ($stmt) {
        $stmt->bind_param("ssssssss", $email, $name, $mobile, $gender, $dob, $institute, $university, $experience);

        try {
            if ($stmt->execute()) {
                echo "success";
            } else {
                throw new Exception($stmt->error);
            }
        } catch (Exception $e) {
            http_response_code(500);
            if ($conn->errno == 1062) {
                 echo "Email already registered!";
            } else {
                 echo "Error: " . $e->getMessage();
            }
        }
        $stmt->close();
    } else {
        http_response_code(500);
        echo "Error preparing statement: " . $conn->error;
    }

    $conn->close();
} else {
    // Redirect if accessed directly
    header("Location: index.php");
    exit();
}
?>
