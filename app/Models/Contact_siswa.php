<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact_siswa extends Model
{
    use HasFactory;
    protected $table = 'contact_siswa';
    protected $guarded = ['id'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
    public function contact_type()
    {
        return $this->belongsTo(Contact::class);
    }
}
