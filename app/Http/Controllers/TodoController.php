<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index(){
        return View("ListToDo.index")->with('todos',Todo::all());
    }
    public function show($todoid){
        return View('ListToDo.disc')->with('todo',Todo::find($todoid));
        //dd($todoid);
    }
    public function create()
    {
        return View('ListToDo.createtodo');
    }
    public function store(){
        session()->flash('message',"your task is created successfuly");
        $this->validate(request(),[
            'name'=>'required|min:3|max:15',
            'discription'=> 'required|min:8'
        ]);
        $data = request()->all();
        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->discription = $data['discription'];
        $todo->complitd = false;
        $todo->save();
        return redirect('/list');
    }

    public function edit($todoid){
        $todo = Todo::find(($todoid));
        return View('ListToDo.edittodo')->with('todo',$todo);

    }

    public function update($todoid)
    {
        session()->flash('message',"your task is updated successfuly");

        $this->validate(request(),[
           'name'=>'required|min:3|max:15',
          'discription'=> 'required|min:8'
        ]);

        $data=request()->all();
        $todo=Todo::find($todoid);
        $todo->name = $data['name'];
        $todo->discription = $data['discription'];
        $todo->save();
        return redirect('/list');

    }


    public function destroy($todoid)
    {
        session()->flash('message',"your task is Deleted successfuly");
        $todo = Todo::find($todoid);
        $todo->delete();
        return redirect('/list');
    }

    public function complite(Todo $todo)

    {
        session()->flash('message',"your task is complited successfuly");
         $todo->complitd = true;
         $todo->save();
         return redirect('/list');
    }
}

