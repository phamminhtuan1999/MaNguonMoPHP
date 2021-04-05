<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./site.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Website bán hàng</title>
</head>

<body>
    <!-- Navbar section -->
    <nav class="navbar navbar-expand-sm navbar-light bg-white border-bottom">
        <a class="navbar-brand ml-2 font-weight-bold" href="./"><span id="burgundy">The</span><span
                id="orange">GioiDiDong</span></a> <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarColor" aria-controls="navbarColor" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarColor">
            <ul class="navbar-nav">
                <li class="nav-item rounded bg-light search-nav-item"><input type="text" id="search" class="bg-light"
                        placeholder="Search"><span class="fa fa-search text-muted"></span></li>
                <li class="nav-item"><a class="nav-link" href="#"><span class="fas fa-sign-in-alt"></span><span
                            class="text">Login</span></a> </li>
                <li class="nav-item "><a class="nav-link" href="#"><span class="fa fa-shopping-cart"></span><span
                            class="text">Cart</span></a> </li>
            </ul>
        </div>
    </nav>
    <div class="filter"> <button class="btn btn-default" type="button" data-toggle="collapse"
            data-target="#mobile-filter" aria-expanded="true" aria-controls="mobile-filter">Filters<span
                class="fa fa-filter pl-1"></span></button>
    </div>
    <!-- <div id="mobile-filter">
        <p class="pl-sm-0 pl-2"> Trang chủ </p>
        <div class="border-bottom pb-2 ml-2">
            <h4 id="burgundy">Filters</h4>
        </div>
        <div class="py-2 border-bottom ml-3">
            <h6 class="font-weight-bold">Danh mục</h6>
            <div id="orange"><span class="fa fa-minus"></span></div>
            <form>
                <div class="form-group"> <input type="checkbox" id="artisan"> <label for="artisan">Fresh Artisan
                        Breads</label> </div>
                <div class="form-group"> <input type="checkbox" id="breakfast"> <label for="breakfast">Breakfast
                        Breads</label> </div>
                <div class="form-group"> <input type="checkbox" id="healthy"> <label for="healthy">Healthy
                        Breads</label> </div>
            </form>
        </div>
        <div class="py-2 border-bottom ml-3">
            <h6 class="font-weight-bold">Accompainments</h6>
            <div id="orange"><span class="fa fa-minus"></span></div>
            <form>
                <div class="form-group"> <input type="checkbox" id="tea"> <label for="tea">Tea Cakes</label> </div>
                <div class="form-group"> <input type="checkbox" id="cookies"> <label for="cookies">Cookies</label>
                </div>
                <div class="form-group"> <input type="checkbox" id="pastries"> <label for="pastries">Pastries</label>
                </div>
                <div class="form-group"> <input type="checkbox" id="dough"> <label for="dough">Cookie Dough</label>
                </div>
                <div class="form-group"> <input type="checkbox" id="choco"> <label for="choco">Chocolates</label> </div>
            </form>
        </div>
        <div class="py-2 ml-3">
            <h6 class="font-weight-bold">Top Offers</h6>
            <div id="orange"><span class="fa fa-minus"></span></div>
            <form>
                <div class="form-group"> <input type="checkbox" id="25off"> <label for="25">25% off</label> </div>
                <div class="form-group"> <input type="checkbox" id="5off"> <label for="5off" id="off">5% off on artisan
                        breads</label> </div>
            </form>
        </div>
    </div> -->
    <!-- Sidebar filter section -->
    <!-- <section id="sidebar">
        <p> Home | <b>All Breads</b></p>
        <div class="border-bottom pb-2 ml-2">
            <h4 id="burgundy">Filters</h4>
        </div>
        <div class="py-2 border-bottom ml-3">
            <h6 class="font-weight-bold">Categories</h6>
            <div id="orange"><span class="fa fa-minus"></span></div>
            <form>
                <div class="form-group"> <input type="checkbox" id="artisan"> <label for="artisan">Fresh Artisan
                        Breads</label> </div>
                <div class="form-group"> <input type="checkbox" id="breakfast"> <label for="breakfast">Breakfast
                        Breads</label> </div>
                <div class="form-group"> <input type="checkbox" id="healthy"> <label for="healthy">Healthy
                        Breads</label> </div>
            </form>
        </div>
    </section> -->