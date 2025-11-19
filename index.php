<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GR-5</title>
    <?php
    $directories = glob('*', GLOB_ONLYDIR);
    foreach ($directories as $dir) {
        if (file_exists($dir . '/style.css')) {
            echo '<link rel="stylesheet" href="' . htmlspecialchars($dir) . '/style.css">' . "\n    ";
        }
    }
    ?>
</head>
<body style="margin: 0; padding: 0; display: flex; flex-direction: column; align-items: center;">
    <?php
    $hasIndex = [];
    foreach ($directories as $dir) {
        $indexPath = $dir . '/index.html';
        if (file_exists($indexPath)) {
            $hasIndex[] = $dir;
            $content = file_get_contents($indexPath);
            if (preg_match('/<body[^>]*>(.*?)<\/body>/is', $content, $matches)) {
                echo $matches[1];
            }
        }
    }
    ?>
    <script style="display: none;">
        const directories = <?php echo json_encode($directories); ?>;
        console.log('Directories:', directories);
        const hasIndex = <?php echo json_encode($hasIndex); ?>;
        console.log('Directories with index.html:', hasIndex);
    </script>
</body>
</html>