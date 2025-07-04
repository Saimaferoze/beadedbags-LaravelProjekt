<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') | Shopping Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
.contact-box {
    background: #fff;
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.contact-info i {
    font-size: 20px;
    color: #dc3545;
    margin-right: 10px;
}

.card-img-top {
    height: 200px;
    object-fit: cover;
}

.hero {
    background: linear-gradient(to right, #dc3545, #ff6f61);
    color: white;
    padding: 60px 20px;
    text-align: left;
}

.team-img {
    width: 100%;
    height: 250px;
    object-fit: cover;
}

.section-title {
    border-left: 5px solid #dc3545;
    padding-left: 10px;
    font-weight: bold;
}

.product-img {
    width: 100px;
    height: 100px;
    object-fit: cover;
}

.cart-table th,
.cart-table td {
    vertical-align: middle;
}
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}"><i class="fa fa-fire"></i> Asad Mukhtar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}"><i class="fa fa-info-circle"></i> About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products') }}"><i class="fa fa-cubes"></i> Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}"><i class="fa fa-envelope"></i> Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-sm btn-warning mt-2 position-relative" href="{{ route('cart') }}">
                            <i class="fa fa-shopping-cart"></i> Cart
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                                0
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        @yield('content')
    </div>
</body>

</html>