<?php

declare(strict_types=1);
include_once "bootstrap.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>
        <?php

        $user1 = new User("Paul", 24);
        echo $user1->userName;

        $todo1 = new Todo("do dishes", $user1);
        $todo2 = new Todo("buy present for the wife", $user1);
        ?>
    </h1>

    <p>Welcome to the website <?php echo $user1->userName; ?></p>
    <p>Your currently have the following todo's: <?php echo $todo1->todoName . "<br>";
                                                    echo $todo2->todoName; ?></p>
</body>

</html>