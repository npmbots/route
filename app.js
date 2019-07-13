// server.js
// where your node app starts
/*
// init project
const express = require('express');
const app = express();

// we've started you off with Express, 
// but feel free to use whatever libs or frameworks you'd like through `package.json`.

// http://expressjs.com/en/starter/static-files.html
app.use(express.static('public'));

// http://expressjs.com/en/starter/basic-routing.html
app.get('/', function(request, response) {
  response.sendFile(__dirname + '/views/index.html');
});

// listen for requests :)
const listener = app.listen(process.env.PORT, function() {
  console.log('Your app is listening on port ' + listener.address().port);
});
*/

var url = require('url');
var fs = require('fs');

function renderHTML(path, response) {
    fs.readFile(path, null, function(error, data) {
        if (error) {
            response.writeHead(404);
            response.write('ERROR PAGE ! 404');
        } else {
            response.write(data);
        }
        response.end();
    });
}

module.exports = {
  handleRequest: function(request, response) {
      response.writeHead(200, {'Content-Type': 'text/html'});

      var path = url.parse(request.url).pathname;
      switch (path) {
          case '/':
              renderHTML('./index.php', response);
              break;
          case '/validation':
              renderHTML('./validation.php', response);
              break;
          case '/register':
           renderHTML('./database.php', response);
          break;
          case '/home':
           renderHTML('./homepage.php', response);
          break;
         case '/logout':
          renderHTML('./logout.php', response)
          break;
          default:
              response.writeHead(404);
              response.write('Route not defined');
              response.end();
      }

  }
};
