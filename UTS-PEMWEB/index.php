<!-- index.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/index.css">
    <title>Document</title>
</head>
<body>
    <form action="./backend/login.php" method="post">
        <h1>LOGIN</h1>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="masukkan email anda">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="masukkan password anda">
        <input type="submit" value="Login" name="submit">
    </form>
</body>
</html>
