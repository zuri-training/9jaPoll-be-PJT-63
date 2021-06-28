<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CandProfile;

class PostCandController extends Controller
{
    //
    public function index()
    {
        return view('candidate');
    }

    public function store(Request $request)
    {
        //dd($request);

        $post = new CandProfile;

        if ($request->hasFile('profile_image')) {

            $request->validate([
                'profile_image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);
    
            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file('profile_image')->store('public/images/');

            $image = $request->file('profile_image')->getClientOriginalName();

        $this->validate(request(), [
            'cand_name'=>'required',
            'DOB'=>'required',
            'age'=>'required',
            'gender'=>'required',
            'marital_status'=>'required',
            'occupation'=>'required',
            'post'=>'required',
            'degrees_obtained'=>'required',
            'schools_attended'=>'required',
            'party'=>'required'
        ]);

        
        $post->cand_name = $request->cand_name;
        $post->DOB = $request->DOB;
        $post->age = $request->age;
        $post->gender = $request->gender;
        $post->marital_status = $request->marital_status;
        $post->occupation = $request->occupation;
        $post->post = $request->post;
        $post->prev_post = $request->prev_post;
        $post->degrees_obtained = $request->degrees_obtained;
        $post->honours = $request->honours;
        $post->schools_attended = $request->schools_attended;
        $post->awards = $request->awards;
        $post->party = $request->party;
        $post->wiki_link = $request->wiki_link;
        $post->other_links = $request->other_links;
        $post->facebook = $request->facebook;
        $post->twitter = $request->twitter;
        $post->instagram = $request->instagram;
        
       
        $post->profile_image = $image;
        $post->save();

        }

        

        return redirect('addcandidates')->with('status', 'Post Form Data Has Been inserted');
        
        
        
    }

}
