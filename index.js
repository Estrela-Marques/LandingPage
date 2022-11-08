//mensagens utilizadas na página
var mensagens = {
  cepObrigatorio: 'Digite um cep válido!',
  emailJahExistente:
    'Esse e-mail já está em uso em nossa base de dados, para continuar é necessário digitar um outro e-mail!'
}

var servicos = {
  conultaDeCep: 'https://viacep.com.br/ws/'
}

//campos da landing page
var campos = {
  nome: $('#nome'),
  email: $('#email'),
  telefone: $('#telefone'),
  cep: $('#cep'),
  bairro: $('#bairro'),
  logradouro: $('#logradouro'),
  cidade: $('#cidade'),
  uf: $('#uf'),
  endereco: $('#endereco'),
  numero: $('#numero'),
  grupoEndereco: $('.endereco')
}

//configuração do campo cep
var cepOptions = {
  onComplete: function (cep) {
    desabilitaCamposDeEndereco()
    encontrarCep(cep)
  },
  onKeyPress: function (cep, event, currentField, options) {},
  onChange: function (cep) {},
  onInvalid: function (val, e, f, invalid, options) {
    var error = invalid[0]
    console.log(
      'Digit: ',
      error.v,
      ' is invalid for the position: ',
      error.p,
      '. We expect something like: ',
      error.e
    )
  }
}

//configuração do campo telefone
var maskBehavior = function (val) {
    return val.replace(/\D/g, '').length === 11
      ? '(00) 00000-0000'
      : '(00) 0000-00009'
  },
  telefoneOptions = {
    onKeyPress: function (val, e, field, options) {
      field.mask(maskBehavior.apply({}, arguments), options)
    }
  }

function montaUrlConsultaCep(cep) {
  return servicos.conultaDeCep + cep + '/json/'
}

//consulta do CEP na API
function encontrarCep(cep) {
  if (cep) {
    $.ajax({
      type: 'GET',
      dataType: 'json',
      url: montaUrlConsultaCep(cep),
      async: true,
      success: function (response) {
        campos.bairro.val(response.bairro)
        campos.logradouro.val(response.logradouro)
        campos.cidade.val(response.localidade)
        campos.uf.val(response.uf)
        //Se o logradouro vier preenchido muda o foco para o campo número
        if (campos.logradouro.val()) {
          campos.numero.focus()
        } else {
          campos.logradouro.focus()
        }
      },
      error: function (e) {
        alert(e.statusText)
      },
      complete: function () {
        habilitaCamposDeEndereco()
      }
    })
  } else {
    alert(mensagens.cepObrigatorio)
  }
}

function desabilitaCamposDeEndereco() {
  campos.grupoEndereco.prop('readonly', true)
}

function habilitaCamposDeEndereco() {
  campos.grupoEndereco.prop('readonly', false)
}

//definindo eventos dos campos
$(document).ready(function () {
  campos.cep.mask('00000-000', cepOptions)
  campos.telefone.mask(maskBehavior, telefoneOptions)

  campos.email.focusout(function () {
    var field_value = $(this).val()
    var local_email = Cookies.get('email')
    if (local_email && local_email == field_value) {
      alert(mensagens.emailJahExistente)
      $(this).val('')
      $(this).focus()
    }
  })
})
