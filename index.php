<?php
$dsn = 'mysql:dbname=test_db;host=localhost;';
$user = 'sasaki';
$password = 'Zerosenn52gata!';
try {
    $dbh = new PDO($dsn, $user, $password);
    print "Success\n";
} catch (PDOException $e) {
    print "Failed: " . $e->getMessage() . "\n";
    exit();
}

$sql = "select * from user"
$result = $dbh->query($sql);
?>

<DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content = "width=device-width,initial-scale=1.0">
    <title>TESTpage</title>
</head>
<body>
    <?php foreach( $result as $ value) { ?>

        <h1><?php echo "$value[name]"; ?></h1>
    <?php } ?>
</body>
</html>