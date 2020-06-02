@extends('main')


@section('content')
<h4 style="color: red"><strong>Sąraše matomi tik tiek vilkikai, kuriems yra priskirti gamybos metai!</strong> </h4>
        <div class="row">
           
            <div class="card mx-auto" style="width: 18rem;">
                <div class="card-header">
                Vilkikai
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($markes as $marke)    
                        <li class="list-group-item"> <a href="{{route('trucks.show', $marke->markes->id)}}">{{$marke->markes->marke}}</a>: priskirti {{$marke->owners->count()}} savininkai </li>
                    @endforeach
                </ul>
            </div>
        </div>
    
@endsection

