<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        $items = Todo::all();
        return response()->json([
            'message' => '完了',
            'data' => $items
        ], 200);
    }
    public function addTodos(Request $request)
    {
        $todo = new Todo;
        $todo->title = $request->title;
        $todo->save();
        $items = Todo::all();
        return $items;
    }//ここにVueからのデータを受け取ったあとの処理を書く。
    public function deleteTodo(Request $request)
    {
        $todo = Todo::where('id',$request->id)->delete();
        $items = Todo::all();
        return $items;
    }
}
