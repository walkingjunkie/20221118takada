<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos=Todo::all();
        return view('todos.index',['todos'=>$todos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response()
     */
    public function create(TodoRequest $request)
    {
    $todo = new todo;
    $form = $request->all();
    unset($form['_token']);
    $todo -> fill($form)->save();
    return redirect('/');
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
    public function edit(Request $request)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TodoRequest $request)
    {
    $todo=Todo::find($request->id);
    $todo->name = $request->input('name');
    $todo->save();
    return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
    Todo::find($request->id)->delete();
    return redirect('/');
    }
}