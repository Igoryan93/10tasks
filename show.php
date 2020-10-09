<?php
    $pdo = new PDO("mysql:host=localhost; dbname=table_users", "root", "root");
    $db = "SELECT * FROM user_accounts WHERE id=id, lastName=lastName";
    $statement = $pdo->prepare($db);
    $statement->execute();
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<h3><?php echo $usesr["id"]?></h3>
<h3><?php echo $users["firstName"] ?></h3>
<h3><?php echo $users["lastName"] ?></h3>
<h3><?php echo $users["username"] ?></h3>
