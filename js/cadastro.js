
class Validator {


  //iniciar a validação de todos os campos
  validate(form) {
    //pegando todos os inputs da tela
    let inputs = form.getElementsByTagName('input');

    //convertendo a HTMLCollection para um array
    let inputsArray = [...inputs];

    inputsArray.forEach(function () {
      if (document.getElementById('nome').value == '') {
        document.getElementById('nome').style.borderColor = "red";
      } else {
        document.getElementById('nome').style.borderColor = "#228B22";
      }

      if (document.getElementById('cpf').value == '') {
        document.getElementById('cpf').style.borderColor = "red";
      } else {
        document.getElementById('cpf').style.borderColor = "#228B22";
      }

      if (document.getElementById('datanasc').value == '') {
        document.getElementById('datanasc').style.borderColor = "red";
      } else {
        document.getElementById('datanasc').style.borderColor = "#228B22";
      }

      if (document.getElementById('email').value == '') {
        document.getElementById('email').style.borderColor = "red";
      } else {
        document.getElementById('email').style.borderColor = "#228B22";
      }

      if (document.getElementById('senha').value == '') {
        document.getElementById('senha').style.borderColor = "red";
      } else {
        document.getElementById('senha').style.borderColor = "#228B22";
      }

      if (document.getElementById('confirmasenha').value == '') {
        document.getElementById('confirmasenha').style.borderColor = "red";
      } else {
        document.getElementById('confirmasenha').style.borderColor = "#228B22";
      }

      if (document.getElementById('rua').value == '') {
        document.getElementById('rua').style.borderColor = "red";
      } else {
        document.getElementById('rua').style.borderColor = "#228B22";
      }

      if (document.getElementById('numero').value == '') {
        document.getElementById('numero').style.borderColor = "red";
      } else {
        document.getElementById('numero').style.borderColor = "#228B22";
      }

      if (document.getElementById('termos').value == '') {
        document.getElementById('termos').style.borderColor = "red";
      } else {
        document.getElementById('termos').style.borderColor = "#228B22";
      }
    });

  }

}
let form = document.getElementById("register-form");
let submit = document.getElementById("btn-submit");
let validator = new Validator();

//evento que dispara as validações (clique do botão CADASTRAR)
form.addEventListener("submit", async (e) => {
  e.preventDefault();

  let dadosForm = new FormData(form);
  dadosForm.append("add", 1);

  let dados = await fetch("cadastro.php", {
    method: "POST",
    body: dadosForm,
  });



  validator.validate(form);
});