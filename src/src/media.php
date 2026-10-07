<form method="post">
    <input type="number" name="nota1" step="0.1" min="0" max="10" required>
    <input type="number" name="nota2" step="0.1" min="0" max="10" required>
    <button>Calcular</button>
</form>

<?php
if (isset($_POST['nota1'], $_POST['nota2'])) {
    $media = ((float) $_POST['nota1'] + (float) $_POST['nota2']) / 2;

    if ($media >= 7) {
        $situacao = "Aprovado";
    } elseif ($media >= 5) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }

    echo "Média: " . number_format($media, 1) . "<br>";
    echo "Situação: $situacao";
}
