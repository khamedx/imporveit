<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/core/core.php'; ?>
sjsjjss
<!DOCTYPE html>

<!-- Danny is Crazy -->
<html lang="nl">
    <head>
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>
        <title>Wide World Importers</title>
    </head>
    <body>
        <h1>donders mooi onnie</h1>

        <p>sssss I approve.</p>

        <?php 
            $paramsExists = validate($_GET, ['danny', 'maakt', 'lijpe', 'meuk']);

            var_dump($paramsExists);
        
            echo sanitize('<script>alert("XSS");</script>'); 
        ?>
    </body>
</html>
sssssssssssss
