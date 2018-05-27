<?php
/**
 * Created by PhpStorm.
 * User: idelf
 * Date: 23/05/2018
 * Time: 11:42
 *
 * @author: idelfrides Jorge
 * Descrition: this file contain the base header HTML script for all sistem pages
 */

   //session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>CI&BT4</title>
    <meta charset="UTF-8">
    <meta name="author" content="Idelfrides Jorge and Eric Vinícius">
    <meta name="description" content="Atividade 02 da disciplina Tecnologias Web - Criar um site usando Bootstrap 4.0">
    <meta name="keywords" content="HTML,CSS,Bootstrap 4, jQuery">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url("static/_img/favicon.png");?> ">

    <!--  bootstrap css -->
    <link rel="stylesheet" href="<?=base_url("static/css/bootstrap.min.css");?>">
    <link rel="stylesheet" href="<?=base_url("Assets/_css/header-footer-style.css");?>">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</head>

<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #346d8d;">
    <div class="container">
        <a href="<?=base_url("main/view/home");?>" id="home-style">
            <img id="icon-home" src="<?=base_url("static/imag/home.png");?>" width="40" height="40" title="Home" style="background-color: transparent;">
        </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       

        <a class="navbar-brand h1 mb-0" id="time" data-toggle="tooltip" title=""
           href="#">TIME &nbsp;|</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto" id="navbarSite2">
                <li class="nav-item">
                    <a class="nav-link text-lg-center text-white text-uppercase" href="<?=base_url("main/view/page_cadastro_empresario");?>">Cadastrar Vaga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-lg-center text-white text-uppercase" href="<?=base_url("main/view/vagas");?>">Ver Vagas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-lg-center text-white text-uppercase" href="<?=base_url("main/view/vagas");?>">Candidatar a Vagas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-lg-center text-white text-uppercase" href="#">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?=base_url("estatico/js/jquery-3.3.1.min.js");?>"></script>
<script src="<?=base_url("estatico/js/popper.min.js");?>"></script>
<script src="<?=base_url("estatico/js/bootstrap.min.js");?>"></script>
<script src="<?=base_url("static/css/header-footer-style");?>"></script>

</body>
</html>