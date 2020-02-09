<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 6</title>
</head>
<body>
    <h1>The ultimate smash roster voting site</h1>
    <?php
$servername = "localhost";
$username = "username";
$password = "totoro12";

$connected = mysqli_connect($servername, $username, $password);

if (!$connected) {
    die("Connection failed: " . mysqli_connect_error());
}

$sqlCode = "CREATE DATABASE smashbros_characters;

CREATE TABLE series (
    id int,
    name char(255), 
    PRIMARY KEY (id)
); 

CREATE TABLE characters (
    id int,
    name_of char(255),
    series_id int,
    votes int,
    PRIMARY KEY (id),
    FOREIGN KEY (series_id) REFERENCES series (id)
); 

CREATE TABLE users (
    id int,
    name char(255),
    pass char(255), 
    char_voted_id int,
    PRIMARY KEY (id),
    FOREIGN KEY (char_voted_id) REFERENCES characters (id)
);";
if (mysqli_query($connected, $sqlCode)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($connected);
}

mysqli_close($connected);
?>
</body>
</html>