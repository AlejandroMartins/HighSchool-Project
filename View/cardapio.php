<?php require_once "sidebar.php"; ?>
<link rel="stylesheet" href="..\Css\cardapio.css">



<section class="home">


    <div class="principal">
        <div class="head">
            <h1>Cardapio</h1>
            
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Filtro
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
            </div>

        </div>

        <hr>

        <ul class="list-cardapio">

            <div class="card produto" style="width: 13rem;">
                <img src="../Img/ft-teste.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Hamburguer</h5>

                    <div class="buttons">
                        <button class="btn btn-success icon btn-sm"><i class='bx bx-info-circle'></i></button>

                        <button class="btn btn-primary icon btn-sm"><i class='bx bxs-edit'></i></button>

                        <button class="btn btn-danger icon btn-sm"><i class='bx bxs-trash'></i></i></button>
                    </div>

                </div>
            </div>

        </ul>


    </div>

</section>