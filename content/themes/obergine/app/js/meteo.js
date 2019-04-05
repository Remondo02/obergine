$(document).ready(function(){
    $('#searchWeather').on('keyup', function(e){
      let city = e.target.value;
  
      // Make request to Github
        $.ajax({
            url:'https://www.prevision-meteo.ch/services/json/'+city,
            // data:{
            //     client_id:'b9315bcd5a07fcd759d8',
            //     client_secret:'a2b698bf7e7c02f898197cf136d1a41f704ca8e4'
            // }
        }).done(function(data){
            $('#weather').html(`
            <div class="card border-primary mb-10" style="max-width: 100rem;">
                <div class="card-header"><h3>${data.fcst_day_0.day_long}</h3></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-1">
                                <img class="img-thumbnail avatar" src="${data.fcst_day_0.icon_big}">
                                <span class="btn btn-light btn-block" style="margin-top:.5rem;">${data.current_condition.tmp}°<span>
                            </div>
                            <div class="col-md-9">
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

                    <div class="d-flex">
                        <div class="card mb-3" style="max-width: 28%;">
                            <div class="card-header"><h3>${data.fcst_day_1.day_long}</h3></div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img class="img-thumbnail avatar" src="${data.fcst_day_1.icon_big}">
                                            <span class="btn btn-danger btn-block" style="margin-top:.5rem;">${data.fcst_day_1.tmax}°</span>
                                            <span class="btn btn-primary btn-block">${data.fcst_day_1.tmin}°</span>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="list-group">
                                                <li class="list-group-item">Date : ${data.fcst_day_1.date}</li>
                                                <li class="list-group-item">Condition : ${data.fcst_day_1.condition}</li>
                                            </ul>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 28%;">
                            <div class="card-header"><h3>${data.fcst_day_1.day_long}</h3></div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img class="img-thumbnail avatar" src="${data.fcst_day_1.icon_big}">
                                            <span class="btn btn-danger btn-block" style="margin-top:.5rem;">${data.fcst_day_1.tmax}°</span>
                                            <span class="btn btn-primary btn-block">${data.fcst_day_1.tmin}°</span>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="list-group">
                                                <li class="list-group-item">Date : ${data.fcst_day_1.date}</li>
                                                <li class="list-group-item">Condition : ${data.fcst_day_1.condition}</li>
                                            </ul>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="max-width: 28%;">
                            <div class="card-header"><h3>${data.fcst_day_1.day_long}</h3></div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img class="img-thumbnail avatar" src="${data.fcst_day_1.icon_big}">
                                            <span class="btn btn-danger btn-block" style="margin-top:.5rem;">${data.fcst_day_1.tmax}°</span>
                                            <span class="btn btn-primary btn-block">${data.fcst_day_1.tmin}°</span>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="list-group">
                                                <li class="list-group-item">Date : ${data.fcst_day_1.date}</li>
                                                <li class="list-group-item">Condition : ${data.fcst_day_1.condition}</li>
                                            </ul>
                                        </div>
                                        </div>
                                    </div>
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
       
    