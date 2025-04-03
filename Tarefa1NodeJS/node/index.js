const express = require('express');
const app = express();

app.get('/', (req, res) => {
  console.time('Tempo de carregamento - /');
  res.send('<h1>Bem-vindo ao servidor Node.js com NGINX!</h1>');
  res.timeEnd('Tempo de carregamento - /');
  console.timeEnd('Tempo de carregamento - /');
});

app.get('/excecao', (req, res) => {
  console.time('Tempo de carregamento - /excecao');
  throw new Error('Algo deu errado!');
  // mostrar na página o tempo de carregamento
  console.timeEnd('Tempo de carregamento - /excecao');
});

app.get('/demorado', async (req, res) => {
  console.time('Tempo de carregamento - /demorado');
  await new Promise(resolve => setTimeout(resolve, 10000)); // 10s
  res.send('Resposta demorada entregue com sucesso.');
  console.timeEnd('Tempo de carregamento - /demorado');
});

app.use((err, req, res, next) => {
  console.error(err.stack);
  res.status(500).send('Erro interno no servidor!');
});

app.listen(3000, () => {
  console.log('Servidor Node.js rodando na porta 3000');
});
