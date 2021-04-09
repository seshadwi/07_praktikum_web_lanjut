<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa_MataKuliah extends Model
{
    protected $table = 'mahasiswa_matakuliah';
    protected $primaryKey = 'id';

    public function matakuliah()
    {
        return $this->belongsTo(MataKuliah::class);
    }
}
