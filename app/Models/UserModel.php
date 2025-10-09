<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    // arahkan ke tabel yang benar
    protected $table = 'user'; // kalau di DB namanya `users`, ubah ke 'users'

    protected $fillable = ['nama', 'npm', 'kelas_id'];

    public function getUser()
    {
        return $this->join('kelas', 'kelas.id', '=', 'user.kelas_id')
                    ->select('user.*', 'kelas.nama_kelas as nama_kelas')
                    ->get();
    }
}
