function editKontak(id,nama,nomor,group_kontak,provider){
    $('#edit_id').val(id);
    $('#edit_nama').val(nama);
    $('#edit_nomor').val(nomor);
    $('#edit_group_kontak').val(group_kontak);
    $('#edit_provider').val(provider);    
}

// Movie API
function searchMovie(){
    $('#list-movie').html('');
        $.ajax({
            url : 'https://www.omdbapi.com/',
            type : 'get',
            dataType : 'json',
            data : {
                'apikey' : '9fd3ac6f',
                's' : $('#input-search').val()
            },
            success : function(result){
                console.log(result);
                if(result.Response == 'True'){
                    let movies = result.Search;
                    $.each(movies, function(i, data){
                        $('#list-movie').append(`
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="card mx-1 my-1">
                                <img src="`+data.Poster+`" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">`+data.Title+`</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <button class="btn btn-sm w-100 btn-secondary" data-bs-toggle="modal" data-bs-target="#detailMovie" data-id="`+data.imdbID+`">Detail</button>
                                </div>
                                </div>
                            </div>
                        `)
                    })
                }else{
                    $('#list-movie').html(`
                    <div class="text-center">
                        <img src="/img/notFound.png">
                        <h1>`+ result.Error +`</h1>
                    </div>
                    `)
                }
            }
        })
}

$(document).ready(function(){
    // Error Kontak
    
    let errorAddKontak = $('#message_add_kontak').val()
    if(errorAddKontak == 'error'){        
        $('.alert').removeClass('alert-success').addClass('alert-danger').css('display','none');
        $('#addKontak').modal('show');
    }    


    // Movie API
    $("#button-search").on('click',function(){
        searchMovie();
    })
    // $("#button-search").keyup(function(e){        
    //     let input = $('#input-search').val();
    //     console.log(input);
    //     if(e.which == '13'){            
    //         alert();
    //         searchMovie();
    //     }
    // })
    $(function(){ // this will be called when the DOM is ready
        $('#input-search').keyup(function(e) {
          if(e.keyCode === 13){
            searchMovie();
          }
        });
      });    
})