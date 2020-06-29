<?php

$dsn = 'mysql:dbname=test_db;host=localhost;';

$user = 'sasaki';

$password = 'zerosenn52gata';

try {

    $dbh = new PDO($dsn, $user, $password);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    $id = $_GET['id'];



    $sql = "delete form user where id=:id";

    $stmt = $dbh->prepare($sql);

    $prams = array(':id'=> $id, ':name'=> $name, ':age'=> $age,);

    $stmt->execute($prams);



    header('Location: index.php?fg=1');

    

} catch (PDOException $e) {

	header('Location: index.php?fg=2?err='.$e->getMessage());

	exit();

}

?>