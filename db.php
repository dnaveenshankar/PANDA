<?php
$host = 'sql12.freesqldatabase.com';
$dbname = 'sql12724502';
$user = 'sql12724502';
$password = 'nMiZGW9mgM';
$port = 3306;

$dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected<br>";

    $teamDetailsTable = "
    CREATE TABLE IF NOT EXISTS team_details (
        team_id INT AUTO_INCREMENT PRIMARY KEY,
        team_name VARCHAR(255) NOT NULL,
        leader_name VARCHAR(255) NOT NULL,
        leader_email VARCHAR(255) NOT NULL,
        leader_player_id VARCHAR(255) NOT NULL,
        leader_in_game_name VARCHAR(255) NOT NULL,
        leader_id_level INT NOT NULL,
        player1_id VARCHAR(255) NOT NULL,
        player1_name VARCHAR(255) NOT NULL,
        player1_level INT NOT NULL,
        player2_id VARCHAR(255) NOT NULL,
        player2_name VARCHAR(255) NOT NULL,
        player2_level INT NOT NULL,
        player3_id VARCHAR(255) NOT NULL,
        player3_name VARCHAR(255) NOT NULL,
        player3_level INT NOT NULL,
        player4_id VARCHAR(255) NOT NULL,
        player4_name VARCHAR(255) NOT NULL,
        player4_level INT NOT NULL,
        sub1_id VARCHAR(255),
        sub1_name VARCHAR(255),
        sub2_id VARCHAR(255),
        sub2_name VARCHAR(255)
    )";

    $roomDetailsTable = "
    CREATE TABLE IF NOT EXISTS room_details (
        room_id INT AUTO_INCREMENT PRIMARY KEY,
        team_id INT,
        room_number INT,
        slot_number INT,
        FOREIGN KEY (team_id) REFERENCES team_details(team_id)
    )";

    $adminsTable = "
    CREATE TABLE IF NOT EXISTS admins (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        password VARCHAR(255) NOT NULL
    )";

    $pdo->exec($teamDetailsTable);
    echo "team_details table created successfully.<br>";

    $pdo->exec($roomDetailsTable);
    echo "room_details table created successfully.<br>";

    $pdo->exec($adminsTable);
    echo "admins table created successfully.<br>";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
