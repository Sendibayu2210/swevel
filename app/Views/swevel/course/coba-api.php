<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>

        <script>
                $(document).ready(function() {
                        $.ajax({
                                url: 'http://www.omdbapi.com',
                                type: 'GET',
                                dataType: 'json',
                                data: {
                                        'apikey': '9fd3ac6f', //API Key
                                        's': 'course',
                                },
                                success: function(result) {
                                        console.log(result);
                                        if (result.Response === "True") {
                                                $.each(result, function(i, data) {
                                                        $('#coba').append(`
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="` + result.Poster + `" class="img-fluid">
                                </div>
                                <div class="col-md-8">
                                    <ul class="list-group">
                                      <li class="list-group-item"><h4>` + result.Title + `</h4></li>
                                      <li class="list-group-item">Released : ` + result.Released + `</li>
                                      <li class="list-group-item">Genre : ` + result.Genre + `</li>
                                      <li class="list-group-item">Writer : ` + result.Writer + `</li>
                                      <li class="list-group-item">Actors : ` + result.Actors + `</li>
                                      <li class="list-group-item">Production : ` + result.Production + `</li>
                                      <li class="list-group-item">Plot : ` + result.Plot + `</li>
                                    </ul>
                                </div>
                            </div>
                        </div>    
                        `);
                                                })
                                        }
                                },
                                error: function(result, ajaxOptions, thrownError) {
                                        $('#card-popular-course').append(`
                    <div class="alert alert-danger" role="alert">
                    Maaf, untuk saat ini course belum bisa di akses.
                    </div>
                `)
                                }
                        })
                })
        </script>
</body>

</html>