require('bootstrap');

var app = {
  init: function() {
    console.log('init');

    console.log (document.getElementById('customer_login'));

    document.getElementById('customer_login').classList.add('d-flex' , 'justify-content-around');
    
    var test = document.getElementById('customer_login').firstElementChild;

    console.log(test);
    
    test.classList.add('col-lg-3');
    test.classList.remove('col-1');

    var test2 = document.getElementById('customer_login').lastElementChild;

    console.log(test2);

    test2.classList.add('col-lg-3');
    test2.classList.remove('col-2');

  }
};

$(app.init);
