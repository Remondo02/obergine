var app = {
    init: function(){
      console.log('init burger');

      app.button = document.querySelectorAll('.burger-menu');
      
      for (var indexButton = 0 ; indexButton < app.button.length ; indexButton += 1){
        app.button[indexButton].addEventListener('click', app.displayOverlay);
      }
    },

    displayOverlay: function(){
      var elementClicked = event.target;
      if (elementClicked.nodeName === 'BUTTON'){
        elementClicked = elementClicked.firstElementChild;
      }
      console.log(elementClicked);

      app.bars = document.querySelector('.fa-bars').parentElement;
      app.times = document.querySelector('.fa-times').parentElement;

      if(elementClicked.className === 'fa fa-bars'){
        app.times.parentElement.classList.remove('d-none', 'overlay');
        app.bars.parentElement.classList.add('d-none');
      }
      else {
        app.bars.parentElement.classList.remove('d-none');
        app.times.parentElement.classList.add('d-none', 'overlay');
      }
    },
  };

$(app.init);
