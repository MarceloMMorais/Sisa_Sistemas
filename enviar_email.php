<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    $destinatario = "cpd@buttowsilva.com.br";
    $assunto = "Mensagem do formulário de contato";

    $mensagem_email = "Nome: $nome $sobrenome\n";
    $mensagem_email .= "Email: $email\n";
    $mensagem_email .= "Mensagem:\n$mensagem";

    $headers = "De: $email";

    if (mail($destinatario, $assunto, $mensagem_email, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro ao enviar o e-mail. Por favor, tente novamente mais tarde.";
    }
}
?>
