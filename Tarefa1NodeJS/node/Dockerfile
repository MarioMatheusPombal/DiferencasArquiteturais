FROM node:18

# Diretório de trabalho dentro do container
WORKDIR /app

# Copia os arquivos da aplicação
COPY package*.json ./
RUN npm install

COPY . .

# Expõe a porta 3000
EXPOSE 3000

# Comando para iniciar o servidor
CMD ["npm", "start"]
