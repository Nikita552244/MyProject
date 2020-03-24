<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container w-50">
    <form method="post" enctype="multipart/form-data" action="action.php">
<? echo $_SESSION["error"] ?>
<br>
        <label for="exampleInputEmail1">Введите логин</label>
        <input type="text" class="form-control" name="loginR">

        <label for="exampleInputEmail2">Введите пароль</label>
        <input type="password" class="form-control" name="passwordR">

        <label for="exampleInputEmail2">Введите никнейм</label>
        <input type="text" class="form-control"  name="nicknameR">

        <label for="exampleInputEmail2">Укажите название картинки</label>
        <input type="file" class="form-control"  name="imageReg">
<br>
        <button type="submit" class="btn btn-primary" name="btnOK">Зарегистрироваться</button>
    </form>
</div>
</body>

</html>