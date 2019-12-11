<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>.::LogSystem::.</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
        <link rel="shortcut icon" href="img/favicon.ico" />
    </head>
    <body  onLoad="document.form.codigo.focus();">
        <div class="centerLogin">
            <form  action="./controller/login.php"  method="post" name="form">
                <div class="logoLogin">
                    <img src="img/logo.png" alt="LogSystem" title="logSystem"/>
                </div>
                <div class="senhaLogin formularioLogin">
                    <img src="img/pass.png" alt="Senha" />
                    <input type="password" name="codigo" placeholder="Codigo do funcionario" minlength="4" maxlength="4"/>
                </div>
                <input type="submit" name="btnSubmit" value="Login" class="btnSubmitLogin" />
            </form>
        </div>
    </body>
</html>
