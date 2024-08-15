<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Post;
use App\Models\data;

class Regis extends BaseController
{
    public function display()  {
        return view('regisnew');
    }

    public function update(Request $request)
    {
        $data_save = new data([
            'name'=>$request->get('name'),
            'contact'=>$request->get('contact')
    
        ]);
        $data_save->save();
        return redirect('display');
    }
    // public function edit(User $user)
    // {
    //     return view('user.edit',compact('user'));
    // }
    // public function update1(Request $request, $id)
    // {
    //   $request->validate([
    //     'name' => 'required|max:255',
    //     'contact' => 'required',
    //   ]);
    //   $post = Post::find($id);
    //   $post->update($request->all());
    //   return redirect()->route('display.index')
    //     ->with('success', 'updated successfully.');
    // }
    function delete($id){
        $post = Post::find($id);
        $post->delete();
        return redirect('list');
    }
    function list(){
        $post=Post::all();
        return view ('list',['posts'=>$post]);
    }
}