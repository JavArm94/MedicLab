<li class="{{ Request::is('rols*') ? 'active' : '' }}">
    <a href="{{ route('rols.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>

<li class="{{ Request::is('generos*') ? 'active' : '' }}">
    <a href="{{ route('generos.index') }}"><i class="fa fa-edit"></i><span>Generos</span></a>
</li>

<li class="{{ Request::is('cargos*') ? 'active' : '' }}">
    <a href="{{ route('cargos.index') }}"><i class="fa fa-edit"></i><span>Cargos</span></a>
</li>

<li class="{{ Request::is('localidades*') ? 'active' : '' }}">
    <a href="{{ route('localidades.index') }}"><i class="fa fa-edit"></i><span>Localidades</span></a>
</li>

<li class="{{ Request::is('tipousuarios*') ? 'active' : '' }}">
    <a href="{{ route('tipousuarios.index') }}"><i class="fa fa-edit"></i><span>Tipos de usuario</span></a>
</li><li class="{{ Request::is('parentescos*') ? 'active' : '' }}">
    <a href="{{ route('parentescos.index') }}"><i class="fa fa-edit"></i><span>Parentescos</span></a>
</li>

<li class="{{ Request::is('medicos*') ? 'active' : '' }}">
    <a href="{{ route('medicos.index') }}"><i class="fa fa-edit"></i><span>Medicos</span></a>
</li>

