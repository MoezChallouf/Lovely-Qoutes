<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{

    public function show(Idea $idea)
    {
        return view('ideas.show',compact('idea'));
    }


    public function edit(Idea $idea)
    {
        $editing =true;
        return view('ideas.show',compact('idea','editing'));
    }


    public function store()
    {
//        dump(request()->get('ideas'));

        request()->validate([
            'ideas'=> 'required|min:5|max:255'
        ]);

        $idea = Idea::create(
            [
            'content' => request()->get('ideas','null'),
            ]
        );


        return redirect()->route('dashboard')->with('success','idea created successfully!');

    }

    public function destroy($id)
    {
        $idea = Idea::findOrFail($id);
        $idea->delete();
        return back()->with('success', 'Quote deleted successfully!');
    }


}
