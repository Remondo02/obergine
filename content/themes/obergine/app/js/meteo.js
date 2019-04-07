$(document).ready(function(){
    $('#searchWeather').on('keyup', function(e){
      let city = e.target.value;
  
      // Fait la requête sur prevision-meteo
        $.ajax({
            url:'https://www.prevision-meteo.ch/services/json/'+city,
        }).done(function(data){
            $('#weather').html(`
            <div class="card border-primary mb-10">
                <div class="card-header temp-header"><h3>${data.fcst_day_0.day_long}</h3></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3" >
                                <img class="img-thumbnail avatar" src="${data.fcst_day_0.icon_big}">
                                <span class="btn btn-warning btn-block temp-button">${data.current_condition.tmp}°<span>
                            </div>
                            <div class="col-md-7">
                                <span class="badge badge-primary">Température minimale : ${data.fcst_day_0.tmin}</span>
                                <span class="badge badge-danger">Température maximale : ${data.fcst_day_0.tmax}</span>
                                <span class="badge badge-info">Vitesse du vent : ${data.current_condition.wnd_spd}</span>
                                <span class="badge badge-secondary">Pression atmosphérique : ${data.current_condition.pressure}</span>
                                <span class="badge badge-success">Humidité : ${data.current_condition.humidity}</span>
                                <br><br>
                                <ul class="list-group">
                                    <li class="list-group-item">Date : ${data.current_condition.date}</li>
                                    <li class="list-group-item">Heures : ${data.current_condition.hour}</li>
                                    <li class="list-group-item">Condition : ${data.current_condition.condition}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="row weather-days-container"> 
                    <div class="weather-days-container__info">
                        <div class="card-body temp-day-value"><h3>${data.fcst_day_1.day_long}</h3></div>
                        <img class="temp-thumbnail" src="${data.fcst_day_1.icon_big}">
                        <p class="condition">${data.fcst_day_1.condition}</p>
                    </div>
                    <div class="weather-days-container__info">
                        <div class="card-body temp-day-value"><h3>${data.fcst_day_2.day_long}</h3></div>
                        <img class="temp-thumbnail" src="${data.fcst_day_2.icon_big}">
                        <p class="condition">${data.fcst_day_2.condition}</p>
                    </div>
                    <div class="weather-days-container__info">
                        <div class="card-body temp-day-value"><h3>${data.fcst_day_3.day_long}</h3></div>
                        <img class="temp-thumbnail" src="${data.fcst_day_3.icon_big}">
                        <p class="condition">${data.fcst_day_3.condition}</p>
                    </div>
                        <div class="weather-days-container__info">
                        <div class="card-body temp-day-value"><h3>${data.fcst_day_4.day_long}</h3></div>
                        <img class="temp-thumbnail" src="${data.fcst_day_4.icon_big}">
                        <p class="condition">${data.fcst_day_4.condition}</p>
                    </div>
                </div>
            </div>
        </div>      
        `);
        });
    });
});

        
// A ajouter en ligne de commande pour que le JS récent soit prit en charge (JSuglify-es (ES2015+ Minification)) :
// npm i -D uglifyjs-webpack-plugin@beta
       
    