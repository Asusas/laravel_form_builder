@extends('main')


@section('content')
       <div class="row">
           <div class="card mx-auto" style="width: 18rem;">
              <h4 class="mt-4">{{$vilkikas->marke}}</h4> 
              <h5>{{$markes->metai}}</h5>
              <div class="card-body">
                     @foreach ($vilkikas->comment as $marke)     
                            <p class=" text-justify">{{$marke->komentaraas}}</p> 
                     @endforeach
              </div>
            </div>
            <div class="card mx-auto" style="width: 18rem;">
              <div class="card-header">
                Priskirti savininkai
              </div>
              <ul class="list-group list-group-flush">
                     @foreach ($markes->owners as $marke)
                            <li class="list-group-item">{{$marke->vardas_pavarde}}</li> 
                     @endforeach
              </ul>
            </div>
       </div>
@endsection

