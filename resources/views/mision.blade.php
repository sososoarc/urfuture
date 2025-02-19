@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<nav aria-label="breadcrumb" class="bg-light py-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="C:\Users\nna45\Desktop\act3 best family\bestfamily.html">Inicio</a></li>
                <li class="breadcrumb-item"><a href="C:\Users\nna45\Desktop\act3 best family\5 secciones\establecimientos.html">Nosotros</a></li>
                <li class="breadcrumb-item active" aria-current="page">Mision</li>
            </ol>
        </div>
    </nav>
   <h1 class="neon-text">MISION</h1>
   <main>
        <section class="mision">
            <p>
                En nuestra tienda esotérica, buscamos brindar herramientas y conocimientos para 
                el crecimiento espiritual y el bienestar personal. Creemos en la magia, la energía 
                y la conexión con el universo, ofreciendo productos seleccionados con amor y 
                sabiduría para ayudarte en tu camino.
            </p>
            <p>
                Nuestra misión es ser un faro de luz para aquellos que buscan orientación, 
                equilibrio y armonía en sus vidas. Desde inciensos hasta piedras energéticas, 
                cada artículo en nuestra tienda está destinado a aportar paz y espiritualidad.
            </p>
        </section>
        <div class="imagen-container">
            <img src="images/eso8.jpg" alt="Imagen Esotérica">
        </div>
    </main>

   @endsection
