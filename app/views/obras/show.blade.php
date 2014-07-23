@extends ('layouts.default')

@section ('content')
<h3>{{ $obra->nombre }}</h3>

<section>
    <p class="row">
        <div class="col-sm-3"><b>Constructora</b></div>
        <div class="col-sm-9">{{ $obra->constructora }}</div>
    </p>
    <p class="row">
        <div class="col-sm-3"><b>RFC</b></div>
        <div class="col-sm-9">{{ $obra->rfc }}</div>
    </p>
    <p class="row">
        <div class="col-sm-3"><b>Responsable</b></div>
        <div class="col-sm-9">{{ $obra->responsable }}</div>
    </p>
    <p class="row">
        <div class="col-sm-3"><b>Cliente</b></div>
        <div class="col-sm-9">{{ $obra->cliente }}</div>
    </p>
    <p class="row">
        <div class="col-sm-3"><b>Fecha Inicial</b></div>
        <div class="col-sm-9">{{ $obra->fecha_inicial }}</div>
    </p>
    <p class="row">
        <div class="col-sm-3"><b>Fecha Final</b></div>
        <div class="col-sm-9">{{ $obra->fecha_final }}</div>
    </p>
    <p class="row">
        <div class="col-sm-3"><b>IVA</b></div>
        <div class="col-sm-9">{{ $obra->iva }}</div>
    </p>
</section>
@stop