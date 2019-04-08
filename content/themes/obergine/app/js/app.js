require('bootstrap');

var app = {
  init: function() {
    console.log('init app');


    app.homeUrl = 'http://localhost/Specialisation/WordPress/Apotheose/potager-party';

    if(document.URL === app.homeUrl + 'mon-compte/'){
      app.monCompte();
    }

    else if (document.URL === app.homeUrl + 'questions-frequentes/') {
      app.foireAuxQuestions();
      console.log('test');
    }
    else if (document.URL === app.homeUrl + 'checkout/'){
      app.checkout();
    }

    else {

    }
    
  },

  checkout: function() {
    app.form = document.getElementById('checkout');
    app.div = document.getElementById('customer_details').firstElementChild;


    // app.form.classList.add('d-flex');

    app.divInfosComplementaires = document.getElementById('customer_details').lastElementChild;
    
    app.div.classList.remove('col-1');
    // app.div.classList.add('float-left', 'col-5');
    app.divInfosComplementaires.classList.remove('col-2');

    app.input = document.querySelectorAll('.woocommerce-input-wrapper');

    for (var indexInput = 0 ; indexInput < app.input.length ; indexInput += 1){
      app.input[indexInput].classList.add('col-4', 'ml-2');
    }

    app.additionnalFields = document.querySelector('.woocommerce-additional-fields');

    app.additionnalFields.classList.add('mt-4');
    
  },

  monCompte: function() {

    document.getElementById('customer_login').classList.add('d-flex' , 'justify-content-around');
    
    app.connectForm = document.getElementById('customer_login').firstElementChild;

    
    app.connectForm.classList.add('col-lg-3');
    app.connectForm.classList.remove('col-1');

    app.registerForm = document.getElementById('customer_login').lastElementChild;

    app.registerForm.classList.add('col-lg-3');
    app.registerForm.classList.remove('col-2');
  },

  foireAuxQuestions: function() {
    app.divClicked = document.querySelectorAll('.faq-page__container__question');

    app.allParagraphs = document.querySelectorAll('.faq-page__container__question__answer');

    app.allArrows = document.querySelectorAll('.fa-arrow-right');

    for (var indexDiv = 0 ; indexDiv < app.divClicked.length ; indexDiv += 1){
      app.divClicked[indexDiv].addEventListener('click', app.Clicked);
    }
  },

  Clicked: function() {
    var elementClicked = event.target;

    for (var indexP = 0 ; indexP < app.allParagraphs.length ; indexP += 1){
      app.allArrows[indexP].classList.remove('fa-arrow-down');
      app.allArrows[indexP].classList.add('fa-arrow-right');
      app.allParagraphs[indexP].classList.add('d-none');
    }

    elementClicked.lastElementChild.classList.remove('fa-arrow-right');
    elementClicked.lastElementChild.classList.add('fa-arrow-down');

    if (elementClicked.nodeName === 'H2'){
      elementClicked = elementClicked.parentNode;
    }

    elementClicked.lastElementChild.classList.remove('d-none');
  }

};

$(app.init);
