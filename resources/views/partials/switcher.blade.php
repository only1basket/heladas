@if(Auth::user())
<div class="b-settings-panel">
    <div class="settings-section" style="text-align:center">
        {{ Auth::user()->name }}
    </div>

    <hr class="dashed" style="margin: 15px 0px;">

    <h5><a href="usuario/nuevo-predio/">Nuevo Predio</a></h5>

    <hr class="dashed" style="margin: 15px 0px;">

    <h5><a href="usuario/mis-predios/">Mis Predios</a></h5>
    <div class="settings-section">
        <ul class="b-list iconok">
            <li><span><a href="">Remehue</a></span></li>
            <li><span><a href="">La Pampa</a></span></li>
            <li><span><a href="">Quilanto</a></span></li>
        </ul>
    </div>

    <hr class="dashed" style="margin: 15px 0px;">

    <h5><a href="usuario/perfil/">Perfil</a></h5>

    <hr class="dashed" style="margin: 15px 0px;">

    <h5><a href="{{ route('admin.auth.logout') }}">Salir</a></h5>

    <div class="btn-settings"><p>{{ Auth::user()->name }}</p></div>

</div>
@endif 