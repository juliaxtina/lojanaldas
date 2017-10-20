

 $(document).ready(function() {

  //  campo email
   $('#email').on('change', function() {

     var $this = $(this);

     $this.removeClass('alert-danger');

   });

  // senha
  $('#senha').on('change', function() {

    var $this = $(this);

    $this.removeClass('alert-danger');

  });

  // confirmar senha
  $('#senha2').on('change', function() {

    var $this = $(this);

    $this.removeClass('alert-danger');

  });

  // nome
  $('#nome').on('change', function() {

    var $this = $(this);


    $this.removeClass('alert-danger');

  });

  $('#checkbox').on('change', function() {

    var $this = $(this);


    $this.removeClass('alert-danger');

  });
	// genero radio
  // CPF

  $('#cpf').on('change', function() {

    var $this = $(this);


    $this.removeClass('alert-danger');

  });



  // Data Nascimento
  $('#dataNasc').on('change', function() {

    var $this = $(this);


    $this.removeClass('alert-danger');

  });

  // telefone
  $('#telefone').on('change', function() {

    var $this = $(this);


    $this.removeClass('alert-danger');

  });

$('#mensagem').on('change', function() {

		var $this = $(this);

		$this.removeClass('alert-danger');

	});

  $('#rua').on('change', function() {

    var $this = $(this);


    $this.removeClass('alert-danger');

  });

    $('#sobrenome').on('change', function() {

      var $this = $(this);


      $this.removeClass('alert-danger');

    });

  $('#cep').on('change', function() {

    var $this = $(this);


    $this.removeClass('alert-danger');

  });

  $('#numerocasa').on('change', function() {

    var $this = $(this);


    $this.removeClass('alert-danger');

  });




  $('#bairro').on('change', function() {

    var $this = $(this);


    $this.removeClass('alert-danger');

  });

  $('#cidade').on('change', function() {

    var $this = $(this);


    $this.removeClass('alert-danger');

  });

});
// validar contato

function v_cadastro(form) {
  var error = false;

  var email = $('#email');
  var senha = $('#senha');
  var senha2 = $('#senha2');
  var nome = $('#nome');
  var checkbox = $('#checkbox');

  // genero radio
  // CPF
  var cpf = $('#cpf');
  var dataNasc = $('#dataNasc');
  var telefone = $('#telefone');
  var sobrenome = $('#sobrenome');
  var rua = $('#rua');
  var cep = $('#cep');

  var numerocasa = $('#numerocasa');
  var bairro = $('#bairro');
  var cidade = $('#cidade');






  if (email.val() == '') {

    email.addClass('alert-danger');

    error = !error ? true : error;

  }
  if (senha.val() == '') {

    senha.addClass('alert-danger');

    error = !error ? true : error;

  }
  if (senha2.val() == '') {

    senha2.addClass('alert-danger');

    error = !error ? true : error;

  }
  if (nome.val() == '') {

    nome.addClass('alert-danger');

    error = !error ? true : error;

  }
  if (checkbox.val() == '') {

    checkbox.addClass('alert-danger');

    error = !error ? true : error;

  }
  if (cpf.val() == '') {

    cpf.addClass('alert-danger');

    error = !error ? true : error;

  }

  if (dataNasc.val() == '') {

    dataNasc.addClass('alert-danger');

    error = !error ? true : error;

  }
  if (telefone.val() == '') {

    telefone.addClass('alert-danger');

    error = !error ? true : error;

  }
  if (rua.val() == '') {

    rua.addClass('alert-danger');

    error = !error ? true : error;

  }
  if (sobrenome.val() == '') {

    sobrenome.addClass('alert-danger');

    error = !error ? true : error;

  }
  if (cep.val() == '') {

    cep.addClass('alert-danger');

    error = !error ? true : error;

  }

  if (numerocasa.val() == '') {

    numerocasa.addClass('alert-danger');

    error = !error ? true : error;

  }

  if (bairro.val() == '') {

    bairro.addClass('alert-danger');

    error = !error ? true : error;

  }
  if (cidade.val() == '') {

    cidade.addClass('alert-danger');

    error = !error ? true : error;

  }


  if (error){

    $('#status-msg').html("<p class='alert alert-danger'>Preencha todos os campos corretamente!</p>");
    return false;

  }

  else {

    //alert("A sua solicitação de agendamento foi enviada com sucesso. Em breve entraremos em contato para confirmar sua visita.");

    // $('#status-msg').html("<div class='alert alert-sucess' role='alert'><small>*sucesso</small></div>");


  }


}

//validar senhas
// function validarSenha(form){
//   senha = document.getElementById('senha').value;
//   senha2 = document.getElementById('senha2').value;
//
//   if (senha != senha2){
//   //   $('#status-msg-senha').tooltip({
//   //    'trigger': 'manual',    // chamada manual
//   //    'title': 'Senhas não coincidem, tente novamente',  // texto da tooltip
//   //    'placement': 'bottom'      // localização da tooltip
//   //  }).tooltip('show');
//
//     $('#status-msg-senha').html("<div class='alert alert' role='alert'><small>senhas não coincidem, tente novamente</small></div>");
//     return false;
//   }
//     // else{
//     //       document.f1.submit();
//     //    }
// }
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Senhas diferentes!");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;


//VALIDAR CPF
function verificarCPF(c){
    var i;
    s = c;
    var c = s.substr(0,9);
    var dv = s.substr(9,2);
    var d1 = 0;
    var v = false;

    for (i = 0; i < 9; i++){
        d1 += c.charAt(i)*(10-i);
    }
    if (d1 == 0){
        alert("CPF Inválido")
        v = true;
        return false;
    }
    d1 = 11 - (d1 % 11);
    if (d1 > 9) d1 = 0;
    if (dv.charAt(0) != d1){
        alert("CPF Inválido")
        v = true;
        return false;
    }

    d1 *= 2;
    for (i = 0; i < 9; i++){
        d1 += c.charAt(i)*(11-i);
    }
    d1 = 11 - (d1 % 11);
    if (d1 > 9) d1 = 0;
    if (dv.charAt(1) != d1){
        alert("CPF Inválido")
        v = true;
        return false;
    }
    if (!v) {

    }
}
//VIACEP

function limpa_formulário_cep() {
           //Limpa valores do formulário de cep.
           document.getElementById('rua').value=("");
           document.getElementById('bairro').value=("");
           document.getElementById('cidade').value=("");
           document.getElementById('uf').value=("");
   }

   function meu_callback(conteudo) {
       if (!("erro" in conteudo)) {
           //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);

       } //end if.
       else {
           //CEP não Encontrado.
           limpa_formulário_cep();
           alert("CEP não encontrado.");
       }
   }

   function pesquisacep(valor) {

       //Nova variável "cep" somente com dígitos.
       var cep = valor.replace(/\D/g, '');

       //Verifica se campo cep possui valor informado.
       if (cep != "") {

           //Expressão regular para validar o CEP.
           var validacep = /^[0-9]{8}$/;

           //Valida o formato do CEP.
           if(validacep.test(cep)) {

               //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                 document.getElementById('bairro').value="...";
                 document.getElementById('cidade').value="...";
                 document.getElementById('uf').value="...";

               //Cria um elemento javascript.
               var script = document.createElement('script');

               //Sincroniza com o callback.
               script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

               //Insere script no documento e carrega o conteúdo.
               document.body.appendChild(script);

           } //end if.
           else {
               //cep é inválido.
               limpa_formulário_cep();
               alert("Formato de CEP inválido.");
           }
       } //end if.
       else {
           //cep sem valor, limpa formulário.
           limpa_formulário_cep();
       }
   };
