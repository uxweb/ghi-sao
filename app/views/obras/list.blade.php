@extends ('layouts.default')

@section('content')
<section class="col-md-8 col-md-offset-2">
    <h1>Seleccione una Obra</h1>

    <table class="table table-striped table-condensed">
        <thead>
            <tr>
                <th>Nombre</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($obras as $obra)
            <tr>
                <td>{{ $obra->nombre }}</td>
                <td><a class="btn btn-sm btn-primary" href="{{ route('obra.select', [$obra->getConnectionName(), $obra->id_obra]) }}">Usar</a></td>
                <td><a class="btn btn-sm btn-primary" href="{{ route('obra.show', [$obra->getConnectionName(), $obra->id_obra]) }}">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@stop
