require('bootstrap');
var Rellax = require('rellax');

var app = {
  init: function() {
    console.log('hello');

    new Rellax('.rellax', { 'speed': 2 });
  }
};

$(app.init);