<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'db_connect.php';

// Check if PHPMailer exists
if (!file_exists('PHPMailer/src/Exception.php') || !file_exists('PHPMailer/src/PHPMailer.php') || !file_exists('PHPMailer/src/SMTP.php')) {
    die("Error: PHPMailer library files are missing. Please run <a href='setup_mailer.php'>setup_mailer.php</a> first.");
}

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Sanitize Inputs
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $first_name = htmlspecialchars(trim($_POST['first_name']));
    $middle_name = htmlspecialchars(trim($_POST['middle_name']));
    $last_name = htmlspecialchars(trim($_POST['last_name']));
    $designation = htmlspecialchars(trim($_POST['designation']));
    $gender = htmlspecialchars(trim($_POST['gender']));
    $institute = htmlspecialchars(trim($_POST['institute']));
    $university = htmlspecialchars(trim($_POST['university']));
    $experience = htmlspecialchars(trim($_POST['experience']));

    // 2. Validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid Email format";
        exit();
    }
    if (empty($first_name) || empty($last_name) || empty($middle_name) || empty($designation) || empty($institute) || empty($university) || empty($experience) || empty($gender) || empty($email)) {
        echo "Required fields are missing.";
        exit();
    }

    // 3. Check Duplicate Email
    $checkStmt = $conn->prepare("SELECT id FROM registrations WHERE email = ?");
    $checkStmt->bind_param("s", $email);
    $checkStmt->execute();
    $checkStmt->store_result();
    
    if ($checkStmt->num_rows > 0) {
        echo "already registered";
        $checkStmt->close();
        exit();
    }
    $checkStmt->close();

    // 4. Insert Data    
    $stmt = $conn->prepare("INSERT INTO registrations (email, first_name, middle_name, last_name, designation, gender, institute, university, experience) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    if ($stmt) {
        $stmt->bind_param("sssssssss", $email, $first_name, $middle_name, $last_name, $designation, $gender, $institute, $university, $experience);

        if ($stmt->execute()) {
            $last_id = $conn->insert_id;
            
            // 5. Generate Registration Number (FDP2026_001)
            $reg_number = "FDP2026_" . str_pad($last_id, 4, '0', STR_PAD_LEFT);

            // Update the row with the new Registration Number
            $updateStmt = $conn->prepare("UPDATE registrations SET registration_number = ? WHERE id = ?");
            if ($updateStmt) {
                $updateStmt->bind_param("si", $reg_number, $last_id);
                $updateStmt->execute();
                $updateStmt->close();
            }

            // 6. Send Official Email via PHPMailer
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->isSMTP();                                            
                $mail->Host       = 'smtp.gmail.com';                     
                $mail->SMTPAuth   = true;                                   
                $mail->Username   = 'janvikachhadiya1@gmail.com';           
                $mail->Password   = 'oyqy fgle hsvz ojfg';                 
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
                $mail->Port       = 587;                                    

                //Recipients
                $mail->setFrom('janvikachhadiya1@gmail.com', 'GLS University FDP');
                $mail->addAddress($email, $first_name . ' ' . $last_name);  

                //Content
                $mail->isHTML(true);                                  
                $mail->Subject = 'Registration Confirmed - FDP 2026';
                
                $full_name = $first_name . " " . $last_name;
                $mail->Body    = "
                <html>
                <head>
                  <title>FDP Registration Confirmation</title>
                  <style>
                    body { font-family: 'Arial', sans-serif; background-color: #f4f4f5; margin: 0; padding: 0; }
                    .container { max-width: 600px; margin: 20px auto; background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
                    .header { background-color: #0f172a; padding: 40px 20px; text-align: center; color: white; }
                    .content { padding: 30px; color: #334155; line-height: 1.6; }
                    .badge { background-color: #eff6ff; border: 1px solid #bfdbfe; color: #1e40af; padding: 15px; border-radius: 8px; text-align: center; margin: 20px 0; }
                    .footer { background-color: #f8fafc; padding: 20px; text-align: center; font-size: 12px; color: #94a3b8; }
                  </style>
                </head>
                <body>
                  <div class='container'>
                    <div class='header'>
                        <h1 style='margin: 0; font-size: 24px;'>GLS University</h1>
                        <p style='margin: 5px 0 0; color: #94a3b8;'>Faculty Development Program 2026</p>
                    </div>
                    <div class='content'>
                        <p>Dear <strong>$designation $full_name</strong>,</p>
                        <p>We are delighted to confirm your registration for the <strong>Mastering Generative AI</strong> FDP.</p>
                        
                        <div class='badge'>
                            <p style='margin: 0; font-size: 0.9em; text-transform: uppercase; letter-spacing: 1px;'>Your Registration Number</p>
                            <h2 style='margin: 10px 0 0; font-size: 28px; color: #2563eb;'>$reg_number</h2>
                        </div>

                        <p>Please keep this number handy for future reference and attendance. We look forward to seeing you at the event.</p>
                        
                        <p style='margin-top: 30px;'>Best Regards,<br><strong>Organizing Committee</strong><br>GLS University</p>
                    </div>
                    <div class='footer'>
                        &copy; 2026 GLS University. This is an automated message.
                    </div>
                  </div>
                </body>
                </html>
                ";
                $mail->AltBody = "Dear $designation $full_name, Registration Confirmed. Your Registration Number is $reg_number.";

                $mail->send();
                // Success response
                echo "success|" . $reg_number;

            } catch (Exception $e) {
                // Log error but still might want to show success for registration? 
                // Better to show error so they know mail failed? 
                // User requirement: solve mail not sending.
                // If mail fails, we should probably tell them, but the registration WAS successful in DB.
                // For now, let's output the error so they can debug.
                echo "Mail Error: {$mail->ErrorInfo}";
            }

        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Database Error: " . $conn->error;
    }
    $conn->close();
} else {
    header("Location: index.php");
}
?>
