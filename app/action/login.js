$(document).ready(function(){
  
  $("#frm_login_user").click(function(){
    var user =$('#frm_login_user').val();

    if(user == ''){
      $("#frm_login_div_user").addClass('error');
      
    }

  });

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

      var user =$('#frm_login_user').val();
      var pass =$('#frm_login_pass').val();
      login(user,pass);
    });

  }