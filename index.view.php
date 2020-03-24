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
<style>
.s1{
    
    margin-left:450px;
    
}
</style>
<body>
<p class="s1">Войдите или <?= $error;?></p>
    <div class="container w-50">
        <form method="POST">
            <p>Ваш логин:</p>
            <input type="text" class="form-control" name="login" placeholder="Например,nik@google.com" />
            <p>Ваш пароль:</p>
            <input type="password" class="form-control" name="password" placeholder="Например,123456" />
            <br>
            <button name="btnOK" class="btn btn-primary">Отправить</button>
        </form>
    </div>
</body>

</html>