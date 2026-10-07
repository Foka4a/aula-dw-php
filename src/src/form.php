<form method="POST" action="process_form.php">
    <input name="nome" type="text" placeholder="Digite seu nome">
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    echo "Olá, $nome!";
}
