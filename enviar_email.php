<?php 

if(isset($_POST['email']) && !empty($_POST['email'])){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['mensagem']);

    $to = "moisessouza0204@gmail.com";
    $subject= "Contato - Programador Portifólio";
    $body = "Nome: ".$nome. "\r\n".
            "Email: ".$email. "\r\n".
            "Mensagem: ".$mensagem;
    $header = "From: moisessouza0204@gmail.com"."\r\n"."Reply-to:".$email."\r\n"."X=Mailer:PHP/".phpversion();
    if(mail($to,$subject,$body,$header)){
        echo("Email enviado com suceso!");
    }else {
        echo("Não pode ser enviado!");
    }
    header("Location: index.html");
}
?>