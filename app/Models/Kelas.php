<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = "kelas";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'teacher_id', 'kelas'];

    public function agenda()
    {
        return $this->hasMany(Agenda::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Guru::class);
    }
}
