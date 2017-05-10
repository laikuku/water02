<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $tasks=Task::all();
        //$data=compact($tasks);
        $data=[
            'tasks'=>$tasks,
        ];
        return view('view1',$data);


    }
}
