<?php
  //Variáveis
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];
  $qtde = $_POST['qtde'];
  $js = $_POST['js'];
  $layout_sim = $_POST['layout_sim'];
  $prazo = $_POST['prazo'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  //Compo E-mail
  $arquivo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Mensagem: </b>$mensagem</p>
      <p><b>Quantidade de Páginas: </b>$qtde</p>
      <p><b>Preciso de um script JS: </b>$js</p>
      <p><b>Preciso de um layout: </b>$layout_sim</p>
      <p><b>Prazo: </b>$prazo</p>
      <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "moisessouza0204@gmail.com";
  $assunto = "Contato pelo Portifólio";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nome <$email>";

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
  echo "<meta http-equiv='refresh' content='10;URL=../index.html'>";
?>