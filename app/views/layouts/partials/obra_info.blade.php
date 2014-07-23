@if ($obra)
    <ul class="nav navbar-nav">
        <li class="dropdown active">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="icon icon-wh i-profile"></span> {{ $obra->nombre }} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('obra.show', [$obra->getConnectionName(), $obra->id_obra]) }}">Datos de la Obra</a></li>
                <li><a href="{{ route('obra.index') }}">Cambiar de Obra</a></li>
            </ul>
        </li>
    </ul>
@else
    <p class="navbar-text">
        <em>
            <a class="navbar-link" href="{{ route('obra.index') }}">Obra no seleccionada</a>
        </em>
    </p>
@endif