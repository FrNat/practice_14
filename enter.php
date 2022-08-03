<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class = "log">
    <form action="index.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите логин" required>
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль" required>
        <label>Дата рождения</label>
        <input type="date" name="date" placeholder="Введите дату рождения">
        <input type="hidden" name="time_input" value=<?=time();?>>
        <button type="submit">Войти</button>
        <p class = "form">
            У вас нет аккаунта? - <a href="register.php">Зарегистрируйтесь</a>!
        </p>
    </form>
    </div> 
</body>
</html>