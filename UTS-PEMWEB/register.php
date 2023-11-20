<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/register.css">
    <title>Document</title>
</head>
<body>
    <form action="./backend/register.php" method="post">
        <h1>Register</h1>
        <label for="nama">Nama:</label>
        <input type="text" id="name" name="name" placeholder="masukkan nama anda">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="masukkan email anda">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="masukkan password anda">
        <label for="email">Konfirmasi Password:</label>
        <input type="password" id="confirm" name="confirm" placeholder="masukkan konfirmasi password anda">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>