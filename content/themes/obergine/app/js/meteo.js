var app = {
    init: function() {
    console.log('init meteo');

    app.getMeteo();

    },

    getMeteo: function() {

        app.meteoEmplacement = document.getElementById("meteo-emplacement").value;
        console.log(app.meteoEmplacement);

        app.city = 'paris';

        app.requete = "https://www.prevision-meteo.ch/services/json/" + app.city;

        // Requete HTTP
        var jqXHR = $.ajax(app.requete);  

        jqXHR.done(function(data){
            app.displayMeteo(data);
        });

        // jqXHR.done(app.displayMeteo);

        jqXHR.fail(app.ajaxFailure);
    },

    displayMeteo: function(data) {
        
        app.meteoDay1 = document.getElementById("meteo-day1");
        app.meteoImage1 = document.getElementById("meteo-image1");
        app.meteoCondition1 = document.getElementById("meteo-condition1");
        app.meteoDay1.append(data.fcst_day_1.day_long);
        app.meteoCondition1.append(data.fcst_day_1.condition);
        app.meteoImage1.src = data.fcst_day_1.icon;

        app.meteoDay2 = document.getElementById("meteo-day2");
        app.meteoImage2 = document.getElementById("meteo-image2");
        app.meteoCondition2 = document.getElementById("meteo-condition2");
        app.meteoDay2.append(data.fcst_day_2.day_long);
        app.meteoCondition2.append(data.fcst_day_2.condition);
        app.meteoImage2.src = data.fcst_day_2.icon;

        app.meteoDay3 = document.getElementById("meteo-day3");
        app.meteoImage3 = document.getElementById("meteo-image3");
        app.meteoCondition3 = document.getElementById("meteo-condition3");
        app.meteoDay3.append(data.fcst_day_3.day_long);
        app.meteoCondition3.append(data.fcst_day_3.condition);
        app.meteoImage3.src = data.fcst_day_3.icon;

        app.meteoDay4 = document.getElementById("meteo-day4");
        app.meteoImage4 = document.getElementById("meteo-image4");
        app.meteoCondition4 = document.getElementById("meteo-condition4");
        app.meteoDay4.append(data.fcst_day_4.day_long);
        app.meteoCondition4.append(data.fcst_day_4.condition);
        app.meteoImage4.src = data.fcst_day_4.icon;

        // L'objet JSON ne marche pas dans la boucle
        // for (var indexDay = 0 ; indexDay < 4 ; indexDay += 1){
        //     // console.log(data['fcst_day_0'].day_long);
        //     console.log(data['fcst_day_'+ indexDay].day_long);
        //     console.log(indexDay);
        //     var div2 = $('div').text(data['fcst_day_'+ indexDay].day_long);
        //     // var div = $('<div id="meteo-info">' + data['fcst_day_'+ indexDay].day_long + '</div>');
        //     app.meteoInfo.append(div2);
        // }


        



        console.log('It\'s works');
    },

    ajaxFailure: function(jqXHR, textStatus, errorThrown) {
        console.log('Erreur Ajax : ' + errorThrown);
    }
}

$(app.init);