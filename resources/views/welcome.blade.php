<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
</head>

<body>
    <h1 class="text-center">
        here is our Videos
    </h1>
    <div>
        <div class="container">
            <div class="row">
                @foreach ($listing as $videos )
                @foreach ($videos as $video)


                <div class="col-md-4">
                    <div class="card mt-4" style="width: 18rem;">
                        <img class="card-img-top" src="{{ $video->logo }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $video->list_title }}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>