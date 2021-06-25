FROM node:15-buster
CMD ["node", "app.js"]
EXPOSE 8080/tcp
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .

