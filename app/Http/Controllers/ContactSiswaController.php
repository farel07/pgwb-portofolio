<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Contact_siswa;
use App\Models\Siswa;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class ContactSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view('admin.master_kontak', [
            'contact' => Contact::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $data = [
            'siswa' => Siswa::all(),
            'contact' => Contact::all()
        ];
        return view('admin.kontak.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required',
        ]);

        Contact::create($validatedData);
        return redirect('/admin/master_kontak')->with('success', 'Data kontak siswa berhasil dtambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.kontak.show', [
            'contact' => Contact::find($id)
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
       return view('admin.kontak.edit_contact_type',[
        'contact' => Contact::find($id)
       ]);
    }

    public function edit_contact_siswa($id)
    {
        return view('admin.kontak.edit', [
            'contact_siswa' => contact_siswa::find($id),
            'contact' => Contact::all(),
            // 'siswa' => Siswa::all()
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
       // return $request;
       $validatedData = $request->validate([
        'type' => 'required'
    ]);

    Contact::where('id', $id)->update($validatedData);
    return redirect('/admin/master_kontak/')->with('success', 'Data kontak siswa berhasil update');
    }

    public function update_contact_siswa(Request $request, $id){
         // return $request;
         $validatedData = $request->validate([
            'siswa_id' => 'required',
            'contact_id' => 'required',
            'description' => 'required'
        ]);

        contact_siswa::where('id', $id)->update($validatedData);
        return redirect('/admin/master_kontak/' . $request->contact_id)->with('success', 'Data kontak siswa berhasil update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        Contact::destroy($id);
        return redirect('/admin/master_kontak/')->with('success', 'Data kontak siswa berhasil dihapus');
    }

    public function delete_contact_siswa(Request $request, $id){
        // return $id;
        contact_siswa::destroy($id);
        return redirect('/admin/master_kontak/' . $request->contact)->with('success', 'Data kontak siswa berhasil dihapus');
    }

    public function show_siswa($id){
        return view('admin.kontak.show_siswa',[
            'siswa' => Siswa::all(),
            'contact' => Contact::find($id)
        ]);
    }

    public function form_contact_siswa($contact_id, $id){
        return view('admin.kontak.form_create_contact', [
            'siswa' => Siswa::find($id),
            'contact_id' => $contact_id
        ]);
    }

    public function store_contact_siswa(Request $request){
        $validatedData =  $request->validate([
            'siswa_id' => 'required',
            'contact_id' => 'required',
            'description' => 'required'
        ]);

        contact_siswa::create($validatedData);
        return redirect('/admin/master_kontak/' . $validatedData['contact_id'])->with('success', 'Data contact siswa berhasil ditambahkan');
    }
}
