<?php

function readExperience($filePath) {
    if (file_exists($filePath)) {
        $fileContents = file_get_contents($filePath);
        return $fileContents;
    } else {
        return "File not found.";
    }
}

$con = parse_ini_file("config.ini", true);
$env = $con['ENVIRONMENT'];
$app = $con[$env]['APP_ROOT'];

$filePath = $app . '/filesystem/Experience.txt';

$experience = readExperience($filePath);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .container p {
            color: #666;
            font-size: 16px;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <div class="container">
        
        <?php echo nl2br($experience); ?>
    </div>
</body>
</html>
