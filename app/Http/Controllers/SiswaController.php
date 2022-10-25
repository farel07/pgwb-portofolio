<?php

namespace App\Http\Controllers;


use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'siswa' => Siswa::all()
        ];

        return view('admin.master_siswa', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = ([
            'required' => ':attribute isien',
            'max' => 'Max :max karakter',
            'min' => 'Min :min karakter',
            'email' => 'Isien email',
            'image' => 'Extensi gambar gak valid',
            'photo.max' => 'Ukuran gambar terlalu besar'
        ]);
        // return $request->file('picture');
        $validatedData = $request->validate([
            'nama' => 'required|min:6',
            'nisn' => 'required|max:12',
            'alamat' => 'required',
            'jk' => 'required',
            'email' => 'required',
            'photo' => 'image|file|max:2048',
            'about' => 'required'
        ], $messages);

        // cek apakah user engupload picture
        if ($request->file('photo')) {
            $validatedData['photo'] = $request->file('photo')->store('siswa_picture', ['disk' => 'public']);
        }
        // return  $validatedData['picture'];
        Siswa::create($validatedData);
        return redirect('/admin/master_siswa')->with('success', 'Data siswa berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'siswa' => Siswa::find($id)
        ];

        return view('admin.siswa.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'siswa' => Siswa::find($id)
        ];
        return view('admin.siswa.edit', $data);
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

        $messages = ([
            'required' => ':attribute isien',
            'max' => 'Max :max karakter',
            'min' => 'Min :min karakter',
            'email' => 'Isien email',
            'image' => 'Extensi gambar gak valid',
            'photo.max' => 'Ukuran gambar terlalu besar'
        ]);

        // return $request->file('picture');
        $validatedData = $request->validate([
            'nama' => 'required|min:6',
            'nisn' => 'required|max:12',
            'alamat' => 'required',
            'jk' => 'required',
            'email' => 'required|email',
            'photo' => 'image|file|max:2048',
            'about' => 'required'
        ], $messages);

        if ($request->file('photo')) {
            $validatedData['photo'] = $request->file('photo')->store('siswa_picture', ['disk' => 'public']);
            if ($request->oldImage) {
                Storage::disk('public')->delete($request->oldImage);
            }
        }

        Siswa::where('id', $id)->update($validatedData);
        return redirect('/admin/master_siswa')->with('success', 'Data siswa berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        if ($siswa->photo) {
            Storage::disk('public')->delete($siswa->photo);
        }
        Siswa::destroy($id);
        return redirect('/admin/master_siswa')->with('success', 'Data siswa berhasil dihapus');
    }
}
