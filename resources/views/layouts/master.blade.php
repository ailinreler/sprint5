<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>

  <body>

    <div class="marca">
      <h1><span>E</span>lectronic</h1>
    </div>

    <div class="login">

      <div class="hamburguesa">
        <a href="#">≡</a>
      </div>


      @if (Auth::guest())
        <a href="/login">login</a>
        <a href="/register">registrate</a>
      @endif


      @if (Auth::check())

        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            Cerrar sesión
        </a>

        @if (Auth::user()->usuario == 2)
          <a href="/anadirproducto">Agregar producto</a>
          <a href="/deleteProduct">Eliminar producto</a>
          <a href="/edit">Editar producto</a>
          <a href="/nuevaCategoria">Agregar Categoria</a>
        @endif



        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>

        <div class="container-loggedin">

        @if (Auth::user()->avatar)
          <img src="{{Auth::user()->avatar}}" alt="imagen-avatar">
        @endif


        <h2>Bienvenido {{ Auth::user()->name}}!</h2>
      </div>

      @endif

    </div>


    <header>

      <nav>
        <ul>
          <li><a href="/">home</a></li>
          <li><a href="/products">productos</a></li>
          <li><a href="/faq">faq</a></li>
          <li><a href="/contacto">contacto</a></li>
        </ul>
      </nav>

    </header>

    @yield('content')

    <footer>
      <div>
        <h2>Electronic</h2>
      </div>

      <div>
        <h2>Contacto</h2>
        <p>Podes contactarnos las 24 hs del dia al 4555-5555 o por email a ayuda@electronic@gmail.com</p>
      </div>

      <div>
        <h2>Ayuda</h2>
        <ul>
          <li><a href="#">faq</a></li>
          <li><a href="#contacto">contacto</a></li>
        </ul>
      </div>

      <div>
        <h2>Redes</h2>
        <ul class="redes">
          <li><a href="#"><span class="fa fa-facebook"></span></a></li>
          <li><a href="#"><span class="fa fa-instagram"></span></a></li>
          <li><a href="#"><span class="fa fa-twitter"></span></a></li>
        </ul>
      </div>

    </footer>

  </body>
</html>
