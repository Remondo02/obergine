var app = {
    init: function() {
  
        $("a[href='#ancre-home']").click(function() {
            $('html, body').animate({ scrollTop: 0 }, 900);
            return false;
        });
    }
};
  
$(app.init);