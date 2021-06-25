'use strict';

const express = require('express');
const process = require('process');

// Constants
const PORT = 8080;
const HOST = '0.0.0.0';

// App
process.on('SIGINT', () => {
  process.exit(0)
})
const app = express();
app.get('/', (req, res) => {
  res.send('Hello World');
});

app.listen(PORT, HOST);
console.log(`Running on http://${HOST}:${PORT}`);

