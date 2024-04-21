<?php
$servername = "sql11.freemysqlhosting.net";
$username = "sql11700649";
$password = "KMsCLmwY7u";
$dbname = "sql11700649";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $ID = $_POST['name1'];
  $Name = $_POST['name2'];
  $Subname = $_POST['name3'];
  // Ваш код здесь...
  // Параметры подключения к базе данных
  // Создаем соединение с базой данных
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Подготовка запроса
  $stmt = $conn->prepare("INSERT INTO table_name (name, email, message) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $name, $email, $message);

  // Выполнение запроса
  $stmt->execute();

  // Закрываем соединение
  $stmt->close();
  $conn->close();
}
?>
