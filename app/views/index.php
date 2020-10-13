<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../app/assets/css/semantic.min.css">
    <link rel="stylesheet" href="../app/assets/css/style.css">
    <title>Agregar producto</title>
    <link rel="icon" type="image/png" href="app/assets/images/favicon.png"/>
</head>
<body>
    <main id="addProduct">
        <h1>Nuevo producto</h1>
            <form id="frm_product" class="ui form">

                <!-- Grupo: Image -->
                <div id="frm_product_div_image" class="field">
                    <div class="ui input fluid">
                        <input id="frm_product_image" type="file" name="code">
                    </div>
                    <p class="frm_product_input_error">Ingrese el código del producto</p>
                </div>

                <div class="clm fluid">
                    <!-- Grupo: Code -->
                    <div id="frm_product_div_code" class="field">
                        <label for="code" name="code">Código</label>
                        <div class="ui input fluid">
                            <input id="frm_product_code" type="text" placeholder="Código" name="code">
                        </div>
                        <p class="frm_product_input_error">Ingrese el código del producto</p>
                    </div>

                    <!-- Grupo: Name -->
                    <div id="frm_product_div_name" class="field">
                        <label for="name" name="name">Nombre</label>
                        <div class="ui input fluid">
                            <input id="frm_product_name" type="text" placeholder="Nombre" name="name">
                        </div>
                        <p class="frm_product_input_error">Digíte el nombre del producto</p>
                    </div>

                    <!-- Grupo: Price -->
                    <div id="frm_product_div_price" class="field">
                        <label for="price" name="price">Precio</label>
                        <div class="ui input fluid">
                            <input id="frm_product_price" type="text" placeholder="Precio" name="price">
                        </div>
                        <p class="frm_product_input_error">Digíte el precio del producto</p>
                    </div>
                    
                    <!-- Grupo: Description -->
                    <div id="frm_product_div_descrip" class="field">
                        <label for="descrip" name="descrip">Descripción</label>
                        <div class="ui input fluid">
                            <input id="frm_product_descrip" type="text" placeholder="Descripción" name="description">
                        </div>
                        <p class="frm_product_input_error">Agregue una breve descripción del producto</p>
                    </div>
                    
                    <!-- Mensaje de error -->
                    <div class="frm_product_error fluid center field" id="frm_product_error">
                        <p>* Por favor complete toda la información del producto</p>
                    </div>
                    
                    <!-- Grupo: Bóton Ingresar -->
                    <div id="frm_product_div_btn" class="">
                        <input id="btn_form_product" type='submit' class="ui yellow fluid button" value='Agregar' />
                    </div>
                </div>
            </form>
            
    </main>
    <script src="../app/assets/js/jquery.min.js"></script>
    <script src="../app/assets/js/semantic.min.js"></script>
    <script src="../app/action/product.js"></script>
</body>
</html>