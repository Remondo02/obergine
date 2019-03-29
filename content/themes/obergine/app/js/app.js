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

    app.titlesClicked = document.querySelectorAll('.faq-page__container__question__ask');

    for (var indexH2 = 0; indexH2 < app.titlesClicked.length ; indexH2 += 1){
      app.titlesClicked[indexH2].addEventListener('click', app.openClicked);
    }

    app.paragraphsClicked = document.querySelectorAll('.faq-page__container__question__answer');

    for (var indexP = 0 ; indexP < app.paragraphsClicked.length ; indexP += 1){
      app.paragraphsClicked[indexP].addEventListener('click', app.closedClicked);
    }

  },

  openClicked: function() {
    var elementClicked = event.target;
    
    app.titleClickedAnswer = elementClicked.nextElementSibling;
    app.titleClickedAnswer.classList.remove('d-none');
    
    app.arrowClicked = elementClicked.firstElementChild;
    app.arrowClicked.classList.remove('fa-arrow-right');
    app.arrowClicked.classList.add('fa-arrow-down');

    
    },

    closedClicked: function() {
      var elementClicked = event.target;

      elementClicked.classList.add('d-none');
      app.arrowClicked.classList.remove('fa-arrow-down');
      app.arrowClicked.classList.add('fa-arrow-right');

    }

};

$(app.init);
