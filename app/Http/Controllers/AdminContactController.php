<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*
    public function __construct() {
        $this->middleware('auth');
        // 只有設定的函式使用中介層
        //$this->middleware('auth', ['only'=>'create']);
        // 只有設定的函式"不要"使用中介層
        //$this->middleware('auth', ['except'=>'index']);
    }
    */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        //dd($request->input('name'),$request->input('data1'));
        $post=new Task();
        $post->name= $request->input('name');
        $post->data1= $request->input('data1');
        $post->data2= $request->input('data2');
        $post->data3= $request->input('data3');
        $post->data4= $request->input('data4');

        $post-> save();
        return redirect()->route('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //dd('Edit', $id);
        //$tasks=Task::all();
        $tasks=Task::where('id',$id)->get();
        //$data=compact($tasks);
        $data=[
            'tasks'=>$tasks,
        ];
        return view('view1edit',$data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        //dd($request->input('id'),$request->input('name'));
        $post = Task::where('id',$request->input('id'))->first();
        //$post =Task::find(1);

        $post->name= $request->input('name');

        $post->save();


        return redirect()->route('home');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $flight = Task::find($id);

        $flight->delete();
        return redirect()->route('home');
    }
}
