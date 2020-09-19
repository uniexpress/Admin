<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/assets/css/semantic.min.css">
    <link rel="stylesheet" href="app/assets/css/style.css">
    <title>Login</title>
    <link rel="icon" type="image/png" href="app/assets/images/favicon.png"/>
</head>
<body>
    <main id="login">
        <section id="uniexpress">
            <h1>UniExpress</h1>
            <p class="italic12">La mejor manera de mercar</p>
        </section>
        <section id="marca">
            <img src="app/assets/images/marca.png" alt="">
        </section>
        <section id="info">
            <h2>Iniciar sesión</h2>
            <div class="ui form">
                <div class="field">
                    <div class="ui selection dropdown field">
                        <input type="hidden" name="card[type]">
                        <div class="default text">Tipo de usuario</div>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <div class="item" data-value="visa">
                                <i class="visa icon"></i>
                                    Admin
                            </div>
                            <div class="item" data-value="amex">
                                <i class="amex icon"></i>
                                    Agen
                            </div>
                        </div>
                    </div>

                    <div class="ui left input">
                        <input type="text" placeholder="Usuario">
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui center input">
                        <input type="password" placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="ui blue fluid submit button">Login</div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>