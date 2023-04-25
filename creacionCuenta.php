<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <ul>
            <li>
                <label for="userName">User Name:</label>
                <input type="text" name="userName" id="userName">
            </li>
            <li>
                <label for="email">Email:</label>
                <input type="email" placeholder="ejemplo@prueba.com" name="email" id="name">
            </li>
            <li>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="passwordConfirm">Confirm Password:</label>
                <input type="password" name="passwordConfirm" id="passwordConfirm">
            </li>
            <li>
                <label for="name">Name:</label>
                <input type="text" name="name" id="nomber">
            </li>
            <li>
                <label for="age">Age:</label>
                <input type="number" min="0" max="99" name="age" id="age">
            </li>
            <li>
                <label for="telephoneNumber">Telephone:</label>
                <input type="text" name="telephoneNumber" id="telephoneNumber">
            </li>
            <li>
                <button type="submit">Create Count</button>
                <button type="submit">Return</button>
            </li>
        </ul>
    </form>
</body>
</html>