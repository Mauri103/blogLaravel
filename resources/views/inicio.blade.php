<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    @include('common/nav')
    <div class="container">    
        <form action="/posteo" method="post">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Postear algo...</label>
                <input type="text" class="form-control" name="posteo" id="" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-outline-success me-2" >Postear</button>
        </form>
    </div>
        <div class="container mt-4">
            <h4>Posteos recientes</h4>
        </div>
        @foreach ($posteos as $posteo)
        <div class="d-flex justify-content-center mt-4">
            <div class="container m-2 card ">
                <div class="card-body d-flex justify-content-between">
                    {{$posteo->posteo}}
                    <form action="{{ route('posteo.destroy', $posteo) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    

        <div class="container">
            <div class="d-flex justify-content-end m-5">
                {!! $posteos->links() !!}
            </div>
        </div>
    </div>
   
</body>
</html>