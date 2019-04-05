$(document).ready(function(){
    $('#searchWeather').on('keyup', function(e){
      let username = e.target.value;
  
      // Make request to Github
        $.ajax({
            url:'https://api.github.com/users/'+username,
            data:{
                client_id:'b9315bcd5a07fcd759d8',
                client_secret:'a2b698bf7e7c02f898197cf136d1a41f704ca8e4'
            }
        }).done(function(data){
            $('#weather').html(`
            <div class="card border-primary mb-3" style="max-width: 100rem;">
                <div class="card-header"><h3>${data.name}</h3></div>
                <div class="card-body">
                <div class="row">
                <div class="col-md-3">
                    <img class="img-thumbnail avatar" src="${data.avatar_url}">
                    <a target="_blank" class="btn btn-primary btn-block" href="${data.html_url}">View Profile</a>
                </div>
                <div class="col-md-9">
                    <span class="badge badge-dark">Public Repos: ${data.public_repos}</span>
                    <span class="badge badge-primary">Public Gists: ${data.public_gists}</span>
                    <span class="badge badge-success">Followers: ${data.followers}</span>
                    <span class="badge badge-info">Following: ${data.following}</span>
                    <br><br>
                    <ul class="list-group">
                    <li class="list-group-item">Company: ${data.company}</li>
                    <li class="list-group-item">Website/blog: <a href="${data.blog}" target="_blank">${data.blog}</a></li>
                    <li class="list-group-item">Location: ${data.location}</li>
                    <li class="list-group-item">Member Since: ${data.created_at}</li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
            `);
        });
    });
});

        


       
    