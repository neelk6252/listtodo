@extends('ListToDo.app')
@section('title')
{{$todo->name}}
@endsection
@section('section-content')
        <div class="row">
            <div class="col-md-8 offset-2">
               
                <div class="card mt-5">
                    <div class="caer-header text-center">
                        <h3>{{$todo->name}}</h3>
                    </div>
                    <div class="card-body">{{$todo->discription}}</div>
                </div>
                <a href="/list/{{$todo->id}}/edit" class="btn btn-primary btn-s my-2">Edit</a>
                <a href="/list/{{$todo->id}}/delete" class="btn btn-danger btn-s my-2">Delete</a>
            </div>
        </div>
    </div>
    
@endsection