var http = require('http');
var app = require('../app/app.js');

http.createServer(app.handleRequest).listen(8000);
console.log("Ready")
