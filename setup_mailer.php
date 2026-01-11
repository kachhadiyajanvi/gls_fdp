<?php
$files = [
    'Exception.php' => 'https://raw.githubusercontent.com/PHPMailer/PHPMailer/master/src/Exception.php',
    'PHPMailer.php' => 'https://raw.githubusercontent.com/PHPMailer/PHPMailer/master/src/PHPMailer.php',
    'SMTP.php'      => 'https://raw.githubusercontent.com/PHPMailer/PHPMailer/master/src/SMTP.php'
];

$dir = __DIR__ . '/PHPMailer/src';

if (!file_exists($dir)) {
    mkdir($dir, 0777, true);
}

echo "Starting download...<br>";

foreach ($files as $name => $url) {
    // Context stream to fake a user agent in case GitHub blocks empty ones
    $options = [
        "http" => [
            "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36\r\n"
        ]
    ];
    $context = stream_context_create($options);
    
    $content = file_get_contents($url, false, $context);
    
    if ($content !== false) {
        if (file_put_contents("$dir/$name", $content)) {
            echo "Successfully downloaded and saved: <b>$name</b><br>";
        } else {
            echo "Failed to save: <b>$name</b> (Check permissions)<br>";
        }
    } else {
        echo "Failed to download: <b>$name</b> (Check URL or connection)<br>";
    }
}

echo "<br>Process Complete. You can delete this file now.";
?>
