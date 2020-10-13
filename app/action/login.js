const frm_login_inputs = document.querySelectorAll('#frm_login input');
const inputs = {
  user: false,
  pass: false,
  typeUser: false,
}

$(document).ready(function(){

    var session = localStorage.getItem('session');
    if(session){
      location.href="public/";
    } else {
      localStorage.clear();
      frm_login();
    }

  });

  function login(user,pass){
    var url = "http://express.apiserve.site/api/login?u="+user+"&p="+pass;
    console.log(url);
    fetch(url)
   .then(response=>response.json())
   .then(data=>{
     localStorage.setItem('session', true);
     localStorage.setItem('user', JSON.stringify(data.data[0]));
     location.href="public/";
   })
  }

  function frm_login(){
    $( "#frm_login").submit(function(e) {
      e.preventDefault();
      if(inputs.user && inputs.pass){
        var user =$('#frm_login_user').val();
        var pass =$('#frm_login_pass').val(); 
        var typeUser =$('#frm_login_div_typeUserSelect').val(); 
        login(user,pass);
      } else{
        document.getElementById('frm_login_error').classList.add('frm_login_error-active')
      }
    }); 
  }

  const validationForm = (e) => {
    switch (e.target.name){
      case "1":
      break;
      case "user":
        validationInput(e.target, e.target.name);
      break;
      case "pass":
        validationInput(e.target, e.target.name);
      case "typeUser":
        validationInput(e.target, e.target.name);
      break;
    }
  }

  const validationInput = (input, opc) => {
    if(input.value == ''){
      document.querySelector(`#frm_login_div_${opc} .frm_login_input_error`).classList.add('frm_login_input_error-incorrect');
      inputs[opc] = false;
    }else{
      document.querySelector(`#frm_login_div_${opc} .frm_login_input_error`).classList.remove('frm_login_input_error-incorrect');
      inputs[opc] = true;
      document.getElementById('frm_login_error').classList.remove('frm_login_error-active')
    }
  }

  frm_login_inputs.forEach((input) => {
    input.addEventListener('keyup', validationForm);
  });
