<?php

namespace App\Http\Controllers;

use App\Models\Prompt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PromptController extends Controller
{
    public function index(){

        $prompts = Prompt::where('user_id', '!=', auth()->user()->id)->get();

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

    public function showLikedPrompts(){
        $prompts = auth()->user()->likes;

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

    public function delete(){
        $data = request()->validate([
            'prompt_id' => 'required'
        ]);

        $prompt = Prompt::find($data['prompt_id']);

        if($prompt->user_id == auth()->user()->id){
            $prompt->delete();
        }

        return redirect()->route('prompts.showYourPrompts');
    }

    public function update(){
        $data = request()->validate([
            'prompt_id' => 'required',
            'body' => 'required'
        ]);

        $prompt = Prompt::find($data['prompt_id']);

        if($prompt->user_id == auth()->user()->id){
            $prompt->body = $data['body'];
            $prompt->save();
        }

        return redirect()->route('prompts.showYourPrompts');
    }

    public function likes(){
        $data = request()->validate([
            'prompt_id' => 'required'
        ]);

        $prompt = Prompt::find($data['prompt_id']);
        if($prompt->user_id != auth()->user()->id){
            $prompt->likes()->toggle(auth()->user()->id);
        }

        return redirect()->back();
    }
}
