const expresiones = {
	user: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	pass: /^.{4,12}$/, // 4 a 12 digitos.
}

const frm_login_inputs = document.querySelectorAll('#frm_login input');
const campos = {
  user: false,
  pass: false,
}


$(document).ready(function(){
    frm_login();
  });

  function login(user,pass){
    var url = "http://express.apiserve.site/api/login?u="+user+"&p="+pass;
    console.log(url);
    fetch(url)
   .then(response=>response.json())
   .then(data=>{
     console.log(data.data[0]);
   })
  }

  function frm_login(){
    $( "#frm_login").submit(function(e) {
      e.preventDefault();
      if(campos.user && campos.pass){
        var user =$('#frm_login_user').val();
        var pass =$('#frm_login_pass').val();
        login(user,pass);
      } else{
        document.getElementById('frm_login_error').classList.add('frm_login_error-active')
      }


    }); 
  }

  const validarFormulario = (e) => {
    switch (e.target.name){
      case "1":
      break;
      case "user":
        validarCampo(e.target, e.target.name);
      break;
      case "pass":
        validarCampo(e.target, e.target.name);
      break;
    }
  }

  const validarCampo = (input, campo) => {
    if(input.value == ''){
      document.querySelector(`#frm_login_div_${campo} .frm_login_input_error`).classList.add('frm_login_input_error-incorrect');
      campos[campo] = false;
    }else{
      document.querySelector(`#frm_login_div_${campo} .frm_login_input_error`).classList.remove('frm_login_input_error-incorrect');
      campos[campo] = true;
      document.getElementById('frm_login_error').classList.remove('frm_login_error-active')
    }
  }

  frm_login_inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
  });