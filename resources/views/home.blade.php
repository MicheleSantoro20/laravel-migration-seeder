@extends('layouts.app')

@section('page-title','Home')

@section('content')

<main>
    @foreach ($trains as $treni)
    <div class="container">
        <div class="card">
            <h5 class="card-header">Treno diretto a ->{{$treni->stazione_di_arrivo}}</h5>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <div>Orario Di Partenza:{{$treni->Orario_di_partenza}}Orario Di Arrivo: {{$treni->Orario_di_arrivo}}</div>
                <div>Numero identificativo Del treno: {{$treni->codice_treno}}</div>
                <div>Prezzo : {{$treni->prezzo}}€</div>
                <a href="#" class="btn btn-primary">Acquista</a>
            </div>
        </div>
    </div>

    @endforeach
</main>

@endsection