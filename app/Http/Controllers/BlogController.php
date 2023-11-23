<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BlogFormRequest;
use App\Models\Blog;

class BlogController extends Controller
{
    
    public function index(){
        $blogs = Blog::all();
        return view('Blog.index', compact('blogs'));
    }

    public function create (){
        return view('Blog.create');
    }

    public function edit($blog_id){

        $blog = Blog::find($blog_id);
        return view('Blog.edit', compact('blog'));
    }

    public function store(Request $request){
        
        $data = $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //$data = $request->validated();

        // Gérer le téléchargement de l'image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('img', 'public');
            $data['image'] = $imagePath;
        }

        $blog = Blog::create($data);

        return redirect('/add-blog')->with('message', 'Blog ajouté !!!');
        // $blog = Blog::create([
        //     'titre'=>$data['titre'],
        //     'description'=>$data['description'],
        //     'image'=>$data['image'],
        // ]);
    }

    public function update(BlogFormRequest $request, $blog_id){
        
        $data = $request->validated();

        $blog = Blog::where('id', $blog_id)->update([
            "titre" => $data['titre'],
            "description" => $data['description'],
            "image" => $data['image']
        ]);

        return redirect('/blog')->with('message', 'Blog Mis à jour avec succés !!!');
    }

    public function destroy($blog_id){

        $blog = Blog::find($blog_id)->delete();

        return redirect('/blog')->with('message', 'Blog supprimé avec succés !!!');
    }
}
