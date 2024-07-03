@extends('layouts.app')

@section('content')

<table class="table" style="width: 90%; margin: auto;">
    <thead>
      <tr>
        <th scope="col" style="background-color: rgba(152, 126, 255, 0.356);">#</th>
        <th scope="col" style="background-color: rgba(152, 126, 255, 0.356);">Azienda</th>
        <th scope="col" style="background-color: rgba(152, 126, 255, 0.356);">Stazione di Partenza</th>
        <th scope="col" style="background-color: rgba(152, 126, 255, 0.356);">Stazione di Arrivo</th>
        <th scope="col" style="background-color: rgba(152, 126, 255, 0.356);">Orario di Partenza</th>
        <th scope="col" style="background-color: rgba(152, 126, 255, 0.356);">Orario di Arrivo</th>
        <th scope="col" style="background-color: rgba(152, 126, 255, 0.356);">Codice Treno</th>
        <th scope="col" style="background-color: rgba(152, 126, 255, 0.356);">Numero di Carrozze</th>
        <th scope="col" style="background-color: rgba(152, 126, 255, 0.356);">In Orario</th>
        <th scope="col" style="background-color: rgba(152, 126, 255, 0.356);">Cancellato</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train)
        <tr>
            <th scope="row" style="background-color: rgba(152, 126, 255, 0.356);">{{$train->id}}</th>
            <td style="background-color: rgba(152, 126, 255, 0.356);">{{$train->Azienda}}</td>
            <td style="background-color: rgba(152, 126, 255, 0.356);">{{$train->Stazione_partenza}}</td>
            <td style="background-color: rgba(152, 126, 255, 0.356);">{{$train->Stazione_arrivo}}</td>
            <td style="background-color: rgba(152, 126, 255, 0.356);">{{$train->Orario_partenza}}</td>
            <td style="background-color: rgba(152, 126, 255, 0.356);">{{$train->Orario_arrivo}}</td>
            <td style="background-color: rgba(152, 126, 255, 0.356);">{{$train->Codice_treno}}</td>
            <td style="background-color: rgba(152, 126, 255, 0.356);">{{$train->Numero_carreggiate}}</td>
            <td style="background-color: rgba(152, 126, 255, 0.356);">
                @if ($train->In_orario == 0)
                    IN ARRIVO
                   @else
                   RITARDO 120 MIN
                   @endif
            </td style="background-color: rgba(152, 126, 255, 0.356);">
            <td style="background-color: rgba(152, 126, 255, 0.356);">
                @if ($train->Cancellato== 0)
                CANCELLATO
               @else
               //
            @endif
            </td>
        </tr>
        @endforeach

  </table>

@endsection
