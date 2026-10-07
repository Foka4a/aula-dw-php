<form method="post">
    <input type="number" name="numero" required>
    <button>Gerar tabuada</button>
</form>

<?php
if (isset($_POST['numero'])) {
    $n = (int) $_POST['numero'];
    echo "<h3>Tabuada do $n</h3>";
    foreach (range(1, 10) as $i) {
        echo "$n x $i = " . ($n * $i) . "<br>";
    }
}
