<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GR-5 Hello</title>
    <style>
        body {
            font-family: 'Courier New', monospace;
            margin: 0;
            padding: 20px;
            background: linear-gradient(to bottom, #0a0a0a, #1a1a1a);
            color: #00ff00;
            min-height: 100vh;
        }
        h3 {
            color: #ff0000;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-weight: bold;
            text-shadow: 0 0 10px #ff0000, 0 0 20px #ff0000;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }
        div {
            background-color: #0d0d0d;
            border: 2px solid #333;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 0;
            box-shadow: 0 0 20px rgba(255, 0, 0, 0.3), inset 0 0 30px rgba(0, 0, 0, 0.8);
            position: relative;
            overflow: hidden;
        }
        div::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #00ff00, transparent);
            animation: scan 3s linear infinite;
        }
        p {
            color: #00ff00;
            font-family: 'Courier New', monospace;
            line-height: 1.6;
            text-shadow: 0 0 5px #00ff00;
        }
        @keyframes scan {
            0% { left: -100%; }
            100% { left: 100%; }
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