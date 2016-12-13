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
$statement = $dbh->prepare("SELECT * FROM table WHERE id = :id");
$statement->bindParam(":id", $id, PDO::PARAM_INT);

$id = 1;

$statement->execute();
var_dump($statement->fetchObject());
```
5. Disconnect
```
Database::disconnect();
```
