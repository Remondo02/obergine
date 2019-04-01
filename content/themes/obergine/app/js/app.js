require('bootstrap');

var app = {
  init: function() {
    console.log('init');
    
    app.pageTitle = document.querySelector('.page_title').innerHTML;

    console.log(app.pageTitle);

    if(app.pageTitle === 'Mon compte'){
      app.monCompte();
    }

    else if (app.pageTitle === 'Foire Aux Questions') {
      app.foireAuxQuestions();
    }
    else{

    }
    
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

    elementClicked.lastElementChild.classList.remove('fa-arrow-right');
    elementClicked.lastElementChild.classList.add('fa-arrow-down');

    if (elementClicked.nodeName === 'H2'){
      elementClicked = elementClicked.parentNode;
    }

    for (var indexP = 0 ; indexP < app.allParagraphs.length ; indexP += 1){
      app.allArrows[indexP].classList.remove('fa-arrow-down');
      app.allArrows[indexP].classList.add('fa-arrow-right');
      app.allParagraphs[indexP].classList.add('d-none');
    }

    elementClicked.lastElementChild.classList.remove('d-none');
  }

};

$(app.init);
