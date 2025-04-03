<?php
$inicio = microtime(true); // Captura o tempo de início

echo "<h1>Bem-vindo ao servidor PHP com Apache no Docker!</h1>";

$fim = microtime(true); // Captura o tempo de término
$tempo = $fim - $inicio; // Calcula o tempo de execução
echo "<p>Tempo de carregamento: " . round($tempo, 4) . " segundos.</p>";
?>
