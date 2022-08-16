<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = "guru";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'guru', 'matapelajaran'];

    public function agenda()
    {
        return $this->hasMany(Agenda::class);
    }

    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }
}
