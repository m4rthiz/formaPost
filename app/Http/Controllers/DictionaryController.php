<?php

namespace App\Http\Controllers;

use App\models\Dictionary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DictionaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dictionaries = Dictionary::all();
        return view('dictionaries.index', compact('dictionaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dictionaries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'word' => 'required',
            'definition' => 'required'
        ]);

        $input = $request->all();
        Dictionary::create($input);
        Session::flash('flash_message', 'mot ajouté !');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dictionary = Dictionary::findOrFail($id);

        return view('dictionaries.show', compact('dictionary'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dictionary = Dictionary::findOrFail($id);
        return view('dictionaries.edit', compact('dictionary'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dictionary = Dictionary::findOrFail($id);

        $this->validate($request, [
            'word' => 'required',
            'definition' => 'required'
        ]);
    
        $input = $request->all();
    
        $dictionary->fill($input)->save();
    
        Session::flash('flash_message', 'modification ok !');
    
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dictionary = Dictionary::findOrFail($id);

        $dictionary->delete();
    
        Session::flash('flash_message', 'mot effacé');
    
        return redirect()->route('dictionaries.index');
    }
}
