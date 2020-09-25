<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index(){
        // $tasks = Task::all();
        $tasks = Task::latest()->get();
        return view('tasks.index',[
            'tasks' => $tasks
        ]);
    }

    public function create(){
        return view('tasks.create');
    }

    public function store(Request $request){

        request()->validate([
            'title' => 'required',
            'body'  => 'required'
        ]);

        //#--------------------------------------------#
        
        $task = Task::create([
            'title'=>$request->input('title'),
            'body'=>$request->input('body')
        ]);
        // 위코드 아래코드로 대체 할 수 있다.
        // $task = Task::create(request(['title','body']));


        return redirect('/tasks/'.$task->id);
    }
    
    public function show(Task $task){
        return view('tasks.show', [
            'task'=>$task
        ]);
    }

    public function edit(Task $task) {
        return view('tasks.edit',[
            'task'=>$task
        ]);
    }

    public function update(Task $task) {
        $task->update([
            'title' => request('title'),
            'body'  => request('body')
        ]);
        
        return redirect('/tasks/'.$task->id);
    }    

    public function destroy(Task $task) {
        $task->delete();
        
        return redirect('/tasks');
    }    


    
}
