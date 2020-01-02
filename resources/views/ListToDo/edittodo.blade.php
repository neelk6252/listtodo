@extends('ListToDo.app')
@section('title')
    Edit TODO
@endsection
@section('section-content')
    
            <div class="row">
                <div class="col-md-8 offset-2">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-body">
                                @if ($errors->any())
                                <ul class="list-group">
                                    @foreach ($errors->all() as $error)
                                    <li class="list-group-item alert alert-danger">
                                        {{$error}}
                                    </li>
                                    @endforeach
                                   
                                </ul>
                                    
                                @endif
                                <form action="/{{$todo->id}}/update" method="post">
                                    @csrf
                                    <div class="form-group">
                                    <input type="text" name="name"  class="form-control" value="{{$todo->name}}" placeholder="Name Of TodoS">
                                    </div>
                                    <div class="form-group">
                                       <textarea name="discription" class="form-control" vlaue="{{$todo->discription}}" cols="5" rows="5" placeholder="discript">{{$todo->discription}}
                                       </textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </form>
@endsection