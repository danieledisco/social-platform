<?php
require_once __DIR__ . '/app/layout/header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MILESTORE4: Error</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <main>
        <div class="container">
            <nav>
                <a href="./index.php">HOME</a>
            </nav>
            <h2>Error</h2>
            <h2>The connection to the database failed</h2>
            <h2>Please check sintax and variables</h2>
        </div>
    </main>
    <?php require_once __DIR__ . '/app/layout/footer.php'; ?>
</body>

</html>