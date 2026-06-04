<?php

$conn = new mysqli(
    "db",
    "root",
    "root123",
    "courses_db"
);

if ($conn->connect_error) {
    die("Грешка при връзка");
}

$result = $conn->query("SELECT * FROM courses");
?>

<!DOCTYPE html>
<html lang="bg">
<head>
<meta charset="UTF-8">
<title>Курсове</title>
</head>
<body>

<h1>Списък с курсове</h1>

<ul>

<?php while($row = $result->fetch_assoc()): ?>

<li>
    <?php echo $row['name']; ?>
</li>

<?php endwhile; ?>

</ul>

</body>
</html>