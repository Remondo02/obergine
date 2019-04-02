require('bootstrap');
var Rellax = require('rellax');

var app = {
  init: function() {

    new Rellax('.rellax', { 'speed': 2 });
  }
};

$(app.init);