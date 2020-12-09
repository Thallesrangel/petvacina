<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="PetK">
        <meta name="author" content="Thalles Rangel Lopes">
        <title>Pet K</title>
        <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>assets/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>assets/css/bootstrap.min.css"/>
        <script
			  src="https://code.jquery.com/jquery-3.5.1.js"
			  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
			  crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?=BASE_URL?>assets/js/script.js"></script>
        <script type="text/javascript" src="<?=BASE_URL?>assets/js/responsive.js"></script>

        <script type="text/javascript" src="<?=BASE_URL?>assets/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        
        <link href="<?=BASE_URL?>assets/css/select2.min.css" rel="stylesheet" />
        <script src="<?=BASE_URL?>assets/js/select2.min.js"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
       
        <script src="<?=BASE_URL?>assets/js/jquery.mask.min.js"></script>
        <link href="<?=BASE_URL?>assets/css/multiselect.css" rel="stylesheet" />
        <script src="<?=BASE_URL?>assets/js/multiselect.min.js"></script>
       
        <script src="<?=BASE_URL?>assets/js/sweetalert2.all.min.js"></script>
        <link rel="stylesheet" href="<?=BASE_URL?>assets/css/sweetalert2.min.css">

        <link rel='icon' href="<?=BASE_URL?>assets/img/favicon.png" type='image/x-icon' sizes="16x16" />
    </head>
    <body>

    <div class="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion offcanvas-collapse scrollable-element">
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-text mx-5 m-2">
                    <img src="<?=BASE_URL?>/assets/img/logo.png"/>
                </div>
            
                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASE_URL?>animal">
                        <span><i data-feather="heart"></i> Animais</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASE_URL?>vacina">
                        <span><i data-feather="award"></i> Vacinas</span>
                        </a>
                    </li>  

                    <li class="nav-item">
                        <a class="nav-link" href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <span><i data-feather="award"></i> Registros</span>
                        </a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li class="nav-item li-sub">
                                <a class="href-sub" href="#">Espécie</a>
                            </li>
                            <li class="nav-item li-sub">
                                <a class="href-sub" href="#">Raça</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASE_URL?>vermifugacao">
                        <span><i data-feather="shield"></i> Vermifugação</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASE_URL?>parasita">
                        <span><i data-feather="alert-triangle"></i> Pulgas e Carrapatos</span>
                        </a>
                    </li> 

                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASE_URL?>anticio">
                        <span><i data-feather="pocket"></i> Anti-cio</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASE_URL?>higiene">
                        <span><i data-feather="scissors"></i> Higiene</span>
                        </a>
                    </li> 
                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASE_URL?>relatorio">
                        <span><i data-feather="file-text"></i> Relatórios</span>
                        </a>
                    </li> 
                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASE_URL?>proprietario">
                        <span><i data-feather="users"></i> Proprietários</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASE_URL?>peso">
                        <span><i data-feather="sliders"></i> Peso</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASE_URL?>metrica">
                        <span><i data-feather="trending-up"></i> Métrica</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?=BASE_URL?>fornecedor">
                        <span><i data-feather="shopping-bag"></i> Fornecedor</span>
                        </a>
                    </li>
            </a>
        </ul>


        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                
                <nav class="navbar navbar-expand-lg shadow-sm bg-white static-top w-100 p-1">
             
                    <ul class="list-inline ml-auto">

                        <a class="list-inline-item" href="<?=BASE_URL?>">
                        <i data-feather="home"></i>
                        </a>

                        <a class="list-inline-item mr-3" href="#">
                        <i data-feather="bell"></i>
                        </a>

                       
                        <a class="list-inline-item dropdown-toggle mr-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><?=$_SESSION['nome_usuario']?></span>
                        </a>
                        
                        <div class="list-inline-item dropdown-menu dropdown-menu-right mt-2 mr-3">
                            <a href="<?=BASE_URL?>usuario/perfil" class="dropdown-item font-14" type="button"><i data-feather="user"></i> Perfil</a>
                            <a href="<?=BASE_URL?>login/logout" class="dropdown-item font-14" type="button"><i data-feather="log-out"></i> Sair</a>
                        </div>
                        
                    </ul>

                    <!-- BUTTON RESPONSIVO-->
                    <button class="list-inline-item btn btn-sm btn-dark" type="button" id="navToggle" data-toggle="offcanvas">
                            <span>=</span>
                    </button>
                </nav>
                
                
                    <div class="container">
                        <ul class="nav mt-2 p-2 pl-3 breadcrumb">
                            <li class='nav-item'>
                                <?php $this->addBreadCrumb(); ?>
                            </li> 
                        </ul>
                    </div>
                
                    <div id="body" class="container">
                        <?php
                            require('views/mensagem.php');
                            unset($_SESSION["msg"]);
                            $this->loadViewInTemplate($viewName, $dados);
                        ?>
                    </div>
            </div>
        </div>
    </div>

    <script>
        feather.replace()
    </script>
    </body>
</html>