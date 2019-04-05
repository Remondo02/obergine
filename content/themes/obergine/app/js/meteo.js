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
            <div class="card border-primary mb-3" style="max-width: 100rem;">
                <div class="card-header"><h3>${data.fcst_day_0.day_long}</h3></div>
                <div class="card-body">
                <div class="row">
                <div class="col-md-1">
                    <img class="img-thumbnail avatar" src="${data.fcst_day_0.icon_big}">
                    <span class="btn btn-primary btn-block">${data.current_condition.tmp}°<span>
                </div>
                <div class="col-md-9">
                    <span class="badge badge-dark">Vitesse du vent : ${data.current_condition.wnd_spd}</span>
                    <span class="badge badge-primary">Pression atmosphérique : ${data.current_condition.pressure}</span>
                    <span class="badge badge-success">Humidité : ${data.current_condition.humidity}</span>
                    <br><br>
                    <ul class="list-group">
                    <li class="list-group-item"> Date : ${data.current_condition.date}</li>
                    <li class="list-group-item">Heures : ${data.current_condition.hour}</li>
                    <li class="list-group-item">Condition : ${data.current_condition.condition}</li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
            `);
        });
    });
});

        


       
    