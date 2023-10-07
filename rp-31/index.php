<?php 
 require_once 'connect.php';

 $user = mysqli_query($connect, "SELECT * FROM User");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <?php 
        while($user1 = mysqli_fetch_assoc($user)) {
            print_r($user1);
        }
    ?>

    <form action="addNewUser.php" method="post">
        <label>Имя пользователя</label>
        <input type="text" required name='name'>

        
        <label>Фамилия</label>
        <input type="text" required name='surname'>

        <label>номер телефона</label>
        <input type="number" required name='phone'>

        <label>Адресс</label>
        <input type="text" required name='address'>

        <button type="submit">Дабавить нового пользователя</button>
    </form>

    <form action="deleteUser.php" method="post">
        <label >Введите айди</label>
        <input type="text" required name="id">
        <button type="submit" >Удалить пользователя</button>
    </form>
</body>
</html>

