<?php
$inicio = microtime(true); // Captura o tempo de início

sleep(10); // Simula um processamento demorado de 10 segundos
echo "Página carregada após demora.";

$fim = microtime(true); // Captura o tempo de término
$tempo = $fim - $inicio; // Calcula o tempo de execução
echo "<p>Tempo de carregamento: " . round($tempo, 4) . " segundos.</p>";
?>
