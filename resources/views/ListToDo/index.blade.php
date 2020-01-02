@extends('ListToDo.app')
@section('title')
    ToDos
 @endsection
@section('section-content')
<div class="row">
    <div class="col-sm-8 offset-2">
        <div class="card">
            <div class="card-body">
                <ul class="list-group">
                    @foreach($todos as $todo)
                <li class="list-group-item"><a href="list/{{$todo->id}}">{{$todo->name}}</a> 
                    @if (!$todo->complitd)
                    <a href="list/{{$todo->id}}/complite" class="btn btn-s btn-primary float-right">Complite</a>
                    @endif
                </li>
                     @endforeach()
                </ul>
            </div>
        </div>
        
    </div>
</div>
     
</div>
@endsection
        
