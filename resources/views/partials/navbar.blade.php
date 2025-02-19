
<header class="header">
        <!-- Botón de menú hamburguesa -->
        <div class="menu-toggle" id="menu-toggle">☰</div>

        <!-- Logo -->
        <a href="{{ route('inicio') }}" class="logo">UrFuture</a>

        <!-- Menú de navegación principal -->
        <nav class="navbar">
            <div class="dropdown">
                <a href="Nosotros.html">Nosotros</a>
                <ul class="navert">
                    <li><a href="{{ route('vision') }}">Visión</a></li>
                    <li><a href="{{ route('mision') }}">Misión</a></li>
                    <li><a href="{{ route('valores') }}">Valores</a></li>
                </ul>
            </div>
            <a href="{{ route('productos') }}">Productos</a>
            <a href="Testi.html">Testimonios</a>
            <a href="Descubre.html">Descubre</a>
        </nav>
    </header>

    <!-- Menú lateral hamburguesa -->
    <div class="sidebar" id="sidebar">
        <a href="perfil.html">Perfil</a>
        <a href="compras.html">Compras</a>
        <a href="{{ route('contacto') }}">Contacto</a>
    </div>