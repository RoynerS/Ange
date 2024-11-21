
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAPELERIAS BUTTERFLY</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

</head>

<body>
    <!-- HEADER -->
    <header class="header">
    <div class="logoContent">
        <h1 class="logoName">PAPELERIAS BUTTERFLY</h1>
    </div>

    <nav class="navbar">
        <a href="#home">Inicio</a>
        <a href="#blogs">Sobre Nosotros</a>
        <a href="#productos">productos</a>
        <a href="https://api.whatsapp.com/send?phone=+57 3112380564&text=Hola, Nececito mas informacion de sus productos">contactanos</a>

        @if (Auth::check())
            <a href="#"><button>{{ Auth::user()->Nombre }}</button></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>

                                            <a href="#"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                LOGOUT
                                            </a>
        @else
            <a href="{{ route('login') }}"><button>Login</button></a>
        @endif
    </nav>

    <div class="icon">
        <i class="fas fa-search" id="search"></i>
        <i class="fas fa-bars" id="menu-bar"></i>
    </div>

    <div class="search">
        <input type="search" placeholder="¿ QUE DESEAS BUSCAR ?">
    </div>
</header>

    <!-- ENCABEZADO -->
    <section class="home" id="home">
        <div class="homeContent">
            <h1>Bienvenidos</h1>
            <h2>PAPELERIAS BUTTERFLY</h2>
            <div class="home-btn">
                <a href="#blogs"><button> Nosotros </button></a>
            </div>
        </div>
    </section>

     
    <!-- PRODUCTOS  -->
    <section id="productos">
    <h1>PRODUCTOS DISPONIBLES</h1>
    <div class="product-cards">
        
    </div>
</section>



    
    <!-- SOBRE NOSOTROS  -->
    <section class="blogs" id="blogs">

        <div class=" swiper blogs-row">
            <div class="swiper-wrapper">
                <div class=" swiper-slide box">
                    <div class="img">
                        <img src="img/p.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Imagina y Crece</h3>
                        <p>Papelería Butterfly es una distribuidora de productos escolares y de oficina, donde te 
                            ofrecemos los mejores productos de la más alta calidad. Contamos con una amplia variedad 
                            de artículos que se adaptan a todas tus necesidades, desde útiles escolares, cuadernos, 
                            mochilas y lápices, hasta suministros de oficina como carpetas, papelería, material de 
                            archivo y tecnología.
                        </p>
                    </div>
                </div>
                <div class=" swiper-slide box">
                    <div class="img">
                        <img src="img/logo (4).png" alt="">
                    </div>
                    <div class="content">
                        <h3>Sobre Nuestras Papelerias</h3>
                        <p>Fundado en el 2021 por Angeline Palacios, Mayra Lloreda y Royner Quejada, Nuestra 
                            distribuidora ha estado proporcionando los mejores productos de calidad y a un precio 
                            cómodo para los clientes. Estamos dedicados a la satisfacción de los bienes materiales 
                            útiles en jornadas de trabajo, escolares y estudio.
                        </p>
                        <p>Le garantizamos que nuestros productos vienen siendo producidos con la mentalidad de cuidar 
                            el medio ambiente y ser reutilizables. Contáctate con nosotros y forma parte de nuestra gran 
                            empresa.
                        </p>
                    </div>
                </div>
                <div class=" swiper-slide box">
                    <div class="img">
                        <img src="img/logo2.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Nuestra Promesa</h3>
                        <p>Somos una empresa que se dedica a brindar un buen servicio, tratamos excelente a nuestros 
                            clientes y sobre todo vendemos excelentes productos elaborados de la más alta calidad. 
                            Si no está satisfecho, háganoslo saber y haremos todo lo posible para hacer las cosas bien 
                            y mejorar.
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>


        </div>
    </section>

    <!-- <section class="newsletter">
        <form action="">
            <h3>subscribe for latest update</h3>
            <input type="email" name="" placeholder="enter your email" id="" class="box">
            <input type="button" value="subscribe" class="box2">
        </form>
    </section> -->
    <!-- newsletter section ends here  -->

    <!-- FOOTER-->

    <footer>
        <img src="img/favicon.png" alt="" class="logo">
        <!-- <div class="social-icons-container">
            <a href="" class="social-icon"></a>
            <a href="" class="social-icon"></a>
            <a href="" class="social-icon"></a>
            <a href="" class="social-icon"></a>
        </div> -->
        <ul class="footer-menu-container">
            <li class="menu-item">Legal</li>
            <li class="menu-item">Cookies</li>
            <li class="menu-item">Privacidad</li>
            <li class="menu-item">Productos</li>
        </ul>
        <span class="copyright">Copyright &copy;2024, Papelerias Butterfly. Hecho por Angeline Palacios.</span>
    </footer>

    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- CODIGO JS-->
    <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"
	></script>
    <script src="js/index.js"></script>



</body>

</html>