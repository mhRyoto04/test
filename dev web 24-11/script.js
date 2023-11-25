function validarCadastro() {
  var nome = document.getElementById('nome').value;
  var email = document.getElementById('email').value;
  var telefone = document.getElementById('telefone').value;

  if (nome === '' || email === '' || telefone === '') {
    alert('Por favor, preencha todos os campos.');
    return false;
  }

  var formatoEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!formatoEmail.test(email)) {
    alert('Por favor, insira um email válido.');
    return false;
  }



  exibirMensagemEnviada(); 
  alert('Cadastro enviado com sucesso');
  return true;
}

function exibirMensagemEnviada() {
  var mensagemEnvio = document.getElementById('mensagem-envio');
  mensagemEnvio.innerHTML = 'Obrigado';
  
}

