<?php

namespace App\Http\Controllers;

use App\Models\Prompt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PromptController extends Controller
{
    public function index(){
        $prompts = Prompt::all();

        return view('prompts', [
            'prompts' => $prompts
        ]);
    }

    public function showYourPrompts(){
        $prompts = Prompt::where('user_id', auth()->user()->id)->get();

        return view('prompts', [
            'prompts' => $prompts,
            'user' => auth()->user()
        ]);
    }

    public function store(){
        $data = request()->validate([
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);


        $path = request('image')->store('images', 'public');

        Prompt::create([
            'body' => $data['body'],
            'image' => $path,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('prompts.showYourPrompts');
    }
}
