<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Todo extends Controller
{
	public function Show(Request $request)
    {
		//$request->session()->put('tasks', [["id" => time(), "name" => "Task 1"],["id" => time(), "name" => "Task 2"]]);
		$tasks = $request->session()->get("tasks");
        return view('todo',['tasks' => $tasks]);
    }
	public function Add(Request $request)
    {
		$name = addslashes(htmlspecialchars($request->Task));

		$tasks = $request->session()->get("tasks");
		if(!is_array($tasks)){
			$tasks = array();
		}
		$tasks[] = ["id" => time(),"name" => $name];
		$request->session()->put("tasks", $tasks);
		
		return redirect('/');
    }
	public function Remove(Request $request, $id)
    {
		$tasks = $request->session()->get("tasks");
		if(is_array($tasks) && count($tasks) > 0){
			foreach($tasks as $key => $task){
				if( $task["id"] == $id){
					unset($tasks[$key]);
				}
			}
			$request->session()->put("tasks", $tasks);
		}
		return redirect('/');
    }
}
