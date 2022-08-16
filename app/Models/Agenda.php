<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = "agenda";
    protected $primaryKey = "id";
    protected $fillable = ['guru_id', 'matapelajaran_id', 'materipelajaran', 'kelas_id', 'jenispembelajaran', 'linkpembelajaran', 'absensi', 'keterangan', 'dokumentasi', 'mulai', 'selesai'];
    protected $date = ['created_at'];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
