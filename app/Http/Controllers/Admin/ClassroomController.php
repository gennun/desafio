<?php

namespace App\Http\Controllers\Admin;

use App\Classroom;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Gate;
use Illuminate\Auth\Access\Gate as AccessGate;

class ClassroomController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Classroom::all();
        return view('admin.user.classroom', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Classroom $class)
    {
        $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
        $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

        if (preg_match($longUrlRegex, $request->url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }

        if (preg_match($shortUrlRegex, $request->url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }
        $youtubeUrl = 'https://www.youtube.com/embed/' . $youtube_id ;

        Classroom::create([
            'nome' => $request->nome,
            'description' => $request->description,
            'url' => $youtubeUrl,

        ]);


        $request->session()->flash('success', 'Cadastrado com sucesso!');

        return view('admin.user.create');
    }

    

    public function edit(Classroom $classroom)
    {

        return view('admin.user.editclass', compact('classroom'));

    }

    public function update(Request $request, Classroom $classroom)
    {
        $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
        $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

        if (preg_match($longUrlRegex, $request->url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }

        if (preg_match($shortUrlRegex, $request->url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }
        $youtubeUrl = 'https://www.youtube.com/embed/' . $youtube_id ;

        $classroom->nome = $request->nome;
        $classroom->description = $request->description;
        $classroom->url = $youtubeUrl;
        
        if($classroom->save()){
            $request->session()->flash('success', 'Atualizado com sucesso!');
        }
        else{
            $request->session()->flash('error', 'Houve um erro na atualização!');
        }
        return redirect()->route('classroom.index');
    }

    public function destroy(Classroom $classroom)
    {
        $classroom->delete();

        return redirect()->route('classroom.index');
    }
}
