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
        <section id="frm">
            <h2>Iniciar sesión</h2>
            <form id="frm_login" class="ui form">
                
                <!-- Grupo: Tipo de Usuario -->
                <div id="frm_login_div_typeuser" class="field">
                    <div class="ui input fluid">
                        <select id="frm_login_div_typeUserSelect" class="ui dropdown" name="typeUser">
                            <option selected autofocus disabled>Tipo de usuario</option>
                            <option value="0">Agen</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>
                    <p class="frm_login_input_error">Debe elegir un tipo de usuario</p> 
                </div>


                <!-- Grupo: User -->
                <div id="frm_login_div_user" class="field">
                    <div class="ui input fluid">
                        <input id="frm_login_user" type="text" placeholder="Usuario" name="user">
                    </div>
                    <p class="frm_login_input_error">Este campo es requerido</p>
                </div>

                <!-- Grupo: Contraseña -->
                <div id="frm_login_div_pass" class="field">
                    <div class="ui input fluid">
                        <input id="frm_login_pass" type="password" placeholder="Contraseña" name="pass">
                    </div>
                    <p class="frm_login_input_error">Digíte su contraseña</p>
                </div>

                <!-- Mensaje de error -->
                <div class="frm_login_error fluid center field" id="frm_login_error">
                    <p>* Por favor complete el formulario correctamente</p>
                </div>
                
                <!-- Grupo: Bóton Ingresar -->
                <div id="frm_login_div_btn" class="">
                    <input id="btn_form_login" type='submit' class="ui blue fluid button" value='Ingresar' />
                </div>
            </form>
        </section>
    </main>
    <script src="app/assets/js/jquery.min.js"></script>
    <script src="app/assets/js/semantic.min.js"></script>
    <script src="app/action/login.js"></script>
</body>
</html>