<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Siswa;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.master_project', [
            'project' => Project::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create',[
            'siswa' => Siswa::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $requesT;
        $messages = ([
            'required' => ':attribute harus diisi!', 
        ]);

        $validatedData = $request->validate([
            'project_name' => 'required',
            'siswa_id' => 'required',
            'description' => 'required'
        ], $messages);

        $validatedData['date'] = now();

        Project::create($validatedData);
        return redirect('/admin/master_project')->with('success', 'Data projek berhasil dtambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.project.show', [
            'project' => Project::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.project.edit', [
            'project' => Project::find($id),
            'siswa' => Siswa::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $messages = ([
            'required' => ':attribute harus diisi!', 
        ]);

        $validatedData = $request->validate([
            'project_name' => 'required',
            'siswa_id' => 'required',
            'description' => 'required'
        ], $messages);

        $validatedData['date'] = now();

        Project::where('id', $id)->update($validatedData);
        return redirect('/admin/master_project')->with('success', 'Data projek berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::destroy($id);
        return redirect('/admin/master_project')->with('success', 'Data projek berhasil dihapus');
    }

    public function show_form_create($id){
        return view('admin.project.form_create', [
            'siswa' => Siswa::find($id)
        ]);
    }
}
