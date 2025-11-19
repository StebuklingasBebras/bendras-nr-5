<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GR-5 Hello</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f9f9f9;
        }
        h3 {
            color: #333;
        }
        div {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
    </style>
</head>

<body>
        <?php
    $directories = glob('*', GLOB_ONLYDIR);
    shuffle($directories);
    foreach ($directories as $dir) {
        $file = $dir . '/mano.txt';
        if (file_exists($file)) {
            $content = file_get_contents($file);
            echo '<div>';
            echo '<h3>' . htmlspecialchars($dir) . '</h3>';
            echo '<p>' . htmlspecialchars($content) . '</p>';
            echo '</div>';
        }
    }
    ?>
</body>
</html>