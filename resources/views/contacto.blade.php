@extends('layouts.master')

@section('content')
  <div class="container">

    <div class="preguntasfrecuentesForm">
      <h2>Contactate cuando quieras con nosotros!</h2>
      <p>Vamos a responderte lo más rápido posible!</p>
      <form class="preguntasfrecuentesHelp" action="index.html" method="post">
        <label for="name">Nombre y Apellido:</label>
        <input class="subtitulo-faq" type="text" name="Name" value="">
        <label for="email">E-mail:</label>
        <input class="subtitulo-faq" type="text" name="Name" value="">
        <label for="tema">Tema:</label>
        <input class="subtitulo-faq" type="text" name="Name" value="">
        <label for="categoria">Categoría:</label>
        <input class="subtitulo-faq" type="dropdown" name="Name" value="">
        <label for="pregunta">Pregunta:</label>
        <textarea class="subtitulo-faq" name="pregunta" rows="8" cols="80"></textarea>
        <input class="submit-faq" type="submit" name="submit-faq" value="Enviar pregunta">
      </form>
    </div>

  </div>
@endsection
