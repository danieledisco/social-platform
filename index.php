<?php require_once __DIR__ . '/app/layout/header.php'; ?>
<?php require_once __DIR__ . '/app/functions/connect_db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MILESTONE 4: index</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!--    <?php
    if (!$connection = connect_db('db-milestone')):
        die;
    endif;
    ?> -->

    <div class="container">
        <nav>
            <a href="/PHP/social-platform/index.php">HOME</a>
            <a href="/PHP/social-platform/view_db.php">View Data Base</a>

        </nav>




        <!--       <?php var_dump($connection); ?> -->
    </div>






    <?php require_once __DIR__ . '/app/layout/footer.php'; ?>
</body>

</html>