<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = ['nisn', 'nama', 'alamat', 'jk', 'email', 'about', 'photo'];

    public function project()
    {
        return $this->hasMany(Project::class, 'siswa_id');
    }
    public function contact()
    {
        return $this->belongsToMany(Contact::class)->withPivot('description');
    }
}
// Project::all->jembatan()->user()->name;