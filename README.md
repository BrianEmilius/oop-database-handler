# oop-database-handler
Object Oriented PHP Database Handler

This simple, yet effective database handler uses PDO.

## Usage
1. Edit the file 'database.php' so the variables match your database access information.
2. Include the files 'database.php' in your project
```
<?php
require('database.php');
```
3. Create your database handler
```
$dbh = Database::connect();
```
4. Use the database handler to perform PDO methods
```
$stmt = $dbh->prepare("SELECT * FROM table WHERE id = :id");
$stmt->bindParam(":id", $id, PDO::PARAM_INT);

$id = 1;

$stmt->execute();
var_dump($stmt->fetchObject());
```
5. Disconnect
```
Database::disconnect();
```
