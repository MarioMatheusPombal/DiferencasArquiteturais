<?php
$inicio = microtime(true); // Captura o tempo de início

try {
    throw new Exception("Opa! Algo deu errado...");
} catch (Exception $e) {
    http_response_code(500); // Ainda informa erro ao cliente
    echo "<p>Erro: " . $e->getMessage() . "</p>";
}

$fim = microtime(true); // Captura o tempo de término
$tempo = $fim - $inicio; // Calcula o tempo de execução
echo "<p>Tempo de carregamento: " . round($tempo, 4) . " segundos.</p>";
?>
