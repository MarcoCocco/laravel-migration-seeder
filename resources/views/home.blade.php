@extends('layouts/main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Azienda</th>
                <th scope="col">Stazione di Partenza</th>
                <th scope="col">Stazione di Arrivo</th>
                <th scope="col">Orario Partenza</th>
                <th scope="col">Orario Arrivo</th>
                <th scope="col">Codice Treno</th>
                <th scope="col">Numero Carrozze</th>
                <th scope="col">In orario</th>
                <th scope="col">Cancellato</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($partenzaTreni as $treno)
                <tr>
                    <td>{{ $treno->azienda }}</td>
                    <td>{{ $treno->stazione_partenza }}</td>
                    <td>{{ $treno->stazione_arrivo }}</td>
                    <td>{{ $treno->orario_partenza}}</td>
                    <td>{{ $treno->orario_arrivo }}</td>
                    <td>{{ $treno->data_partenza }}</td>
                    <td>{{ $treno->codice_treno }}</td>
                    <td>{{ $treno->numero_carrozze }}</td>
                    <td>{{ $treno->in_orario ? 'Sì' : 'No' }}</td>
                    <td>{{ $treno->cancellato ? 'Sì' : 'No' }}</td>
                </tr>
            @endforeach --}}

            @foreach ($partenzaTreni as $treno)
                <tr>
                    <td>{{ $treno->company }}</td>
                    <td>{{ $treno->departure_station }}</td>
                    <td>{{ $treno->arrival_station }}</td>
                    <td>{{ $treno->departure_time }}</td>
                    <td>{{ $treno->arrival_time }}</td>
                    <td>{{ $treno->train_code }}</td>
                    <td>{{ $treno->wagons_number }}</td>
                    <td>{{ $treno->on_time ? 'Sì' : 'No' }}</td>
                    <td>{{ $treno->cancelled ? 'Sì' : 'No' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection