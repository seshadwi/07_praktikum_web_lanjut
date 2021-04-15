<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nim',
        'nama',
        'kelas_id',
        'jurusan',
        'email',
        'alamat',
        'ttl',
        'foto',
    ];
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
