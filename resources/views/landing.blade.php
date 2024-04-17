<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
        <a class="navbar-brand" href="Home">
        <img src="{{url('/img/Jlogo.png')}}" alt="Logo" width="50" height="50" class="d-inline-block">
        JET
        </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav grid gap-3">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('Home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('Features')}}">Features</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('Pricing')}}">Pricing</a>
                    </li>
                    <form class="d-flex" style="margin-right: 25px;" role="search" >
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <li class="nav-item position-absolute end-0" style="margin-right: 20px;">
                    <button type="button" class="btn btn-link" href="{{url('Login')}}">Login</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<br>

    <div class="container-fluid text-center">
        <h1>Welcome to Jet's Print Designs!</h1>
        <p>Hey there, fantastic folks! I'm Jet, and I'm thrilled to extend a warm welcome to you all to my online business specializing in top-notch printing designs for your favorite T-shirts, cups, and more!

At Jet's Print Designs, we're dedicated to bringing your creative visions to life with our premium-quality printing services. Whether you're looking to spruce up your wardrobe with unique tees or add a touch of personality to your coffee mugs, we've got you covered.</p>
        <div class="row justify-content-between">
            <div class="col">
                <figure class="figure">
                <img src="{{url('/img/design_1.jpg')}}" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">A tea cup design 1.</figcaption>
                </figure>
            </div>
            <div class="col">
                <figure class="figure">
                <img src="{{url('/img/design_2.jpg')}}" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">A tea cup design 2.</figcaption>
                </figure>
            </div>
        </div>
    </div>
</body>
</html>