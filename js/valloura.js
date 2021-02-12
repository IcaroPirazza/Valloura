// Bootstrap 4 | Tooltip. 
    $(function () {
     $('[data-toggle="tooltip"]').tooltip()
    })

// Bootstrap 4 | Carrossel Controle. 
$('.carousel').carousel({
    interval: 10000 //Tempo.
  })

// Formulário de Contato.
new SimpleForm({
    form: ".formphp", // seletor do formulário
    button: "#enviar", // seletor do botão
    erro: "<div id='form-erro'><p>Um erro ocorreu, tente para o email <b>contato@valloura.com.br</b>.</p></div>", // mensagem de erro
    sucesso: "<div id='form-sucesso'><h2>Formulário enviado com sucesso</h2><p>Em breve eu entro em contato com você.</p></div>", // mensagem de sucesso
  });
