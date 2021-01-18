$('#search_button').on('click', function () { 
  $.ajax({
    type: 'get',
    url: 'http://www.omdbapi.com',
    dataType:'json',
    data: {
      'apikey':'99ea6fcb',
      's':$('#search_input').val()
    },
    success : function (result) {
      console.log(result);
    }
  });
});

$('#search-button').on('click', function () { 
  $('#movie-list').html();

  $.ajax({
    type: 'get',
    url: 'http://www.omdbapi.com',
    dataType:'json',
    data: {
      'apikey':'99ea6fcb',
      's' : $('#search-input').val()
    },
    success : function (result) {
      if(result.Response == "True"){
        let movies = result.Search;
        
        $.each(movies, function (i, data) {
          $('#movie-list').append(`
          <div class = "col-4">
            <div class="card mb-4"">
              <img class="card-img-top" src="`+data.Poster+`" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">`+data.Title+` (`+data.Year+`)</h5>
                <a href="#" class="btn btn-primary text-left">Detail</a>
              </div>
            </div>
          </div>
          `);
        });

        $('#search-input').val("");
      }else{
        $('#movie-list').html(`
          <div class = "col">
            <h2 class = "text-center">`+result.Error+`</h2>
          </div>
        `);
      }
    }
  });
});