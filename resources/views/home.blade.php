@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
 <section>
  <div class="container py-4">
    <h1 class="text-center">TRENI</h1>
    <table class="table">
      <thead>
       <tr>
        <th>Azienda</th>
        <th>Stazione di partenza</th>
        <th>Orario di partenza</th>
        <th>Stazione di arrivo</th>
        <th>Orario di arrivo</th>
        <th>Codice Treno</th>
       </tr>
      </thead>
      <tbody>
        @forelse($trains as $train)
         <tr>
          <td>{{$train->azienda}}</td>
          <td>{{$train->stazione_partenza}}</td>
          <td>{{$train->orario_partenza}}</td>
          <td>{{$train->stazione_arrivo}}</td>
          <td>{{$train->orario_arrivo}}</td>
          <td>{{$train->codice_treno}}</td>
         </tr>
        @empty
          <tr>
            <td colspan="100%">null</td>
          </tr>  
        @endforelse
      </tbody>
    </table>
  </div>
 </section>
@endsection
    

