@extends('ListToDo.app')
@section('title')
    Create TODO
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
                                <form action="store-todo" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name Of TodoS">
                                    </div>
                                    <div class="form-group">
                                       <textarea name="discription" class="form-control"  cols="5" rows="5" placeholder="discription"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </form>
@endsection