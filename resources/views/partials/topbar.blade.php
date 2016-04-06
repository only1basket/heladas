<div class="b-top-bar">
    <div class="layout">
        <!-- Some text -->
        <div class="wrap-left">
            <a href="http://agroclimatico.minagri.gob.cl" target="_blank">IR AL PORTAL AGROCLIMÁTICO</a>
        </div>
        <div class="wrap-right">

            @if(Auth::user())
                <span class="top-bar-text">
                    <span class="bienvenido">Bienvenido {{ Auth::user()->name }} | </span>
				    <a href="mis_suscripciones/">
                        <mark class="blue">Mis Suscripciones</mark>
                    </a> |
                    <a href="mis_usuarios/">
                        <mark class="blue">Mis Usuarios</mark>
                    </a> |
                    <a href="{{ route('admin.auth.logout') }}">
                        <mark class="blue">Salir</mark>
                    </a>
                    </span>
                <span class="top-bar-text-short">
				<span class="bienvenido">Bienvenido {{ Auth::user()->name }} | </span>
				<a href="mis_suscripciones/">
                    <mark class="blue">Mis Suscripciones</mark>
                </a> |
				<a href="mis_usuarios/">
                    <mark class="blue">Mis Usuarios</mark>
                </a> |
				<a href="{{ route('admin.auth.logout') }}">
                    <mark class="blue">Salir</mark>
                </a>
                </span>
            @else
                <span class="top-bar-text">
				<a href="{{ route('admin.auth.login')}}">
                    <mark class="blue">INGRESAR</mark>
                </a> |
				<a href="{{ route('admin.personas.create')}}">
                    <mark class="blue">REGISTRARSE</mark>
                </a>
			</span>
                <span class="top-bar-text-short">
				<a href="{{ route('admin.auth.login')}}">
                    <mark class="blue">INGRESAR</mark>
                </a> |
				<a href="{{ route('admin.personas.create')}}">
                    <mark class="blue">REGISTRARSE</mark>
                </a>
            </span>
            @endif
        </div>
    </div>
</div>
