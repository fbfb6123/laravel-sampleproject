<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Temp;


class HelloController extends Controller
{
    public function index(Request $request)
    {
        $items = User::all();

        $msg = '入力してね';
        $keys = [];
        $values = [];
        if ($request->isMethod('post'))
        {
            $form = $request->all();
            $keys = array_keys($form);
            $values = array_values($form);
        }

        $data = [
            'msg'=>$msg,
            'keys'=>$keys,
            'values'=>$values,
        ];
        return view('hello.index', $data,['items' =>$items]);
    }

    public function other(Request $request)
    {
        $data = [
            'msg'=>$request->bye,
        ];
        return redirect()->route('hello');
    }

    public function create(Request $request)
    {
        return view('hello.create');
    }

    public function store(Request $request)
    {
     $temp = new Temp;

        $temp->title = $request->title;
     // インスタンスの状態をデータベースに書き込む
        $temp->save();

        return redirect('hello');
    }
}
