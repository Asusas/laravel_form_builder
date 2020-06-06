@extends('main')


@section('content')
<h4 style="color: red"><strong>Sąraše matomi tik tiek vilkikai, kuriems yra priskirti gamybos metai!</strong> </h4>
<br>
<form action="{{route('trucks.index')}}">
    <div class="form-group">
        <label class="float-left" for="rusiuotiPagal">Rikiuoti pagal:</label>
        <select class="form-control" name="rusiuotiPagal" class="custom-select" >
                @foreach ([
                'metai'=>'Gamybos metus', 
                'marke'=>'Pavadinimą (abeceles tvarka)',
                ] as $collection => $value)
                    <option @if ($collection==$rusiuotiPagal) selected @endif value="{{$collection}}">{{$value}}</option>
                @endforeach
        </select>
    </div>
    <div class="form-group">
        <label class="float-left" for="rikiuotiPagal">Tvarką</label>
        <select class="form-control" name="rikiuotiPagal" class="custom-select" >
                @foreach ([
                    'desc'=>'Mažėjimo',
                     'asc'=>'Didėjimo'
                     ] as $collection => $value)
                    <option @if ($collection==$rikiuotiPagal) selected @endif value="{{$collection}}">{{$value}}</option>
                @endforeach
        </select>
    </div>
    <hr>
    <button type="submit" class="btn btn-success btn-block">Filtruoti</button>
</form>
<br>
<div class="row">
    <div class="card mx-auto" style="width: 18rem;">
        <div class="card-header">
        Vilkikai
        </div>
        <ul class="list-group list-group-flush">
            @foreach ($markes as $marke)    
                <li class="list-group-item"> 
                    <a href="{{route('trucks.show', $marke->id)}}">{{$marke->marke}}</a>
                    : priskirti {{$marke->owners->count()}} savininkai 
                </li>
            @endforeach
        </ul>
    </div>
</div>
<br>
    
@endsection

