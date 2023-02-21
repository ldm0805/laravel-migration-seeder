{{-- Pagina 1 --}}
@extends('layouts.app')
    @section('content')
    <div class="ticketContainer">
        @foreach($trainsData as $traindata)
            <div class="ticket col-3">
              <div class="ticketTitle">
               <p>Azienda: {{$traindata['azienda']}};</p> 
               <p>Stazione di partenza: {{$traindata['stazione_di_partenza']}};</p>
               <p>Codice Treno: {{$traindata['codice_treno']}};</p> 
                </div>
              <hr>
              <div class="ticketDetail">
                <div class="d-flex flex-column">
                    <p>Orario di partenza: {{$traindata['orario_di_arrivo']}};</p>
                    <p>Ritardo: {{  controlBool($traindata['in_orario']) }};</p>
                    <p>Cancellato: {{  controlBool($traindata['cancellato']) }};</p>
                </div>
                <div class="d-flex flex-column">
                    <p>Stazione di arrivo: {{$traindata['stazione_di_arrivo']}};</p>
                    <p>Orario di arrivo: {{$traindata['orario_di_arrivo']}};</p>
                </div>
            <div class="ticketShadow"></div>
          </div>
        </div>
          @endforeach
    </div>

    @endsection
