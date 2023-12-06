

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!--=============== REMIXICONS ===============-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

    <!--=============== SWIPER CSS ===============-->
    
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/guest_details.css">
    <link rel="stylesheet" href="assets/css/contact_contact.css">

    <link rel="stylesheet" href="assets/css/style_homepage.css">
<!-- header Bachir -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body>
    
  <header class="header">
    <div>
      <div>
        <ul class="containerheader">
          <div class="logoimage">
                <a href="/" class="home-link"><img src="image/Logo.png"  alt=""></a>
            </div>
            <div class="menuheadera" >
                <div class="ullia">
                    <li class="navbar-item"><a class="navbar-link" href="/homepage">Home</a></li>
                    <li class="navbar-item"><a class="navbar-link" href="/landlord">Landloards</a></li>
                    <li class="navbar-item" style="display:flex; justify-content:center;">
                      <a class="navbar-link blog" id="blog"  href="/afficheArticle">Blog <span class="arrow_blog"></span></a>
                      <ul class="ajout_article">
                        <li>
                        @guest
                            @if (Route::has('login'))
                            @endif
                            @if (Route::has('register'))
                             
                            @endif
                        @else
                            @if(Auth::user()->type_user == 'admin')
                        <a href="/formulaire_ajout_articke"  style="list-style:none;">Ajouter un article</a>
                            @endif
                           
                        @endguest                
                        </li>
                      </ul>
                    </li>
                    <li class="navbar-item"><a class="navbar-link" href="/proper">Property</a></li>
                    <li class="navbar-item"><a class="navbar-link" href="/booking">Booking</a></li>
                    <li class="navbar-item"><a class="navbar-link" href="/contact">Contacts</a></li>
                    <li class="navbar-item"><a class="navbar-link" href="/Guest_Detail">Guest Detail</a></li>
                    @guest
                            @if (Route::has('login'))
                            @endif
                            @if (Route::has('register'))
                             
                            @endif
                        @else
                            @if(Auth::user()->type_user == 'admin')
                    <li class="navbar-item"><a class="navbar-link" href="{{route('contacts.index')}}"><i class="fa-solid fa-bell"></i>
                     <!-- Affichage du nombre de notification -->
                    ({{ $messageCount ? $messageCount : ''}})
                  </a></li>
                      @endif
                           
                    @endguest 
                    <!-- <li class="navbar-item"><a class="navbar-link" href="/checkoutpageA">checkout</a></li> -->

                          @guest
                            @if (Route::has('login'))
                                <li class="nav-item  navbar-item">
                                    <a class="nav-link " href="{{ route('login') }}">{{ __('Conexion') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item navbar-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item dropdown  navbar-item">
                                                <a href="/logout" class="btn btn-danger">Déconnexion</a>                  
                                    {{ Auth::user()->prenom}}                                     
                            </li>                     
                        @endguest
                </div>
            </div>
            <button type="button" class="nav-toggler togglers" id="togglers">
                  <span></span>
            </button>
        </ul>
      </div>
    </div>
  </header>


  <style>
    .ajout_article{
      background-color:#F2F0F2;
      position:absolute;
      margin-top:30px;
      display:flex;  
    }
    .activeblog{
      position:absolute;
      margin-top:30px;
      display:flex;
    } 
    .ajout_article li {
      list-style: none;
    }
    .ajout_article li a{
      margin-left:-30px;
      padding:5px;
    }

     #blog{
      cursor:pointer;
    }
    .Active_arrow_blog{
        display:flex;
        margin-left: 35px;
        margin-top:-17px;
        transform: rotate(90deg);
    }
  </style>

  <script>
        blog  = document.getElementById("blog");
        blog.onclick= function(){
        appear = document.querySelector(".ajout_article");
        appear.classList.toggle("activeblog");
        appear = document.querySelector(".arrow_blog");
        appear.classList.toggle("Active_arrow_blog");
        appear.transition ="0.10";
        };
  </script>