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
        <nav class="navbar bg-body-tertiary">
            <form class="container-fluid justify-content-between">
                <div>
                    @if(!Auth::check())
                    <a href="/"><button class="btn btn-outline-success me-2" type="button">Inicio</button></a>
                    @else
                    <a href="/inicio"><button class="btn btn-outline-success me-2" type="button">Inicio</button></a>
                    @endif
                </div>
                <div>
                    @if(!Auth::check())
                        <a href="/login"><button class="btn btn-outline-success me-2" type="button">Login</button></a>
                        <a href="/registrarse"><button class="btn btn-outline-success me-2" type="button">Registrarse</button></a>
                    @endif
                    @if(Auth::check())
                        <a href="/logout"><button class="btn btn-outline-success me-2" type="button">Cerrar sesión</button></a>
                    @endif
                </div>
            </form>
        </nav>
</body>
</html>