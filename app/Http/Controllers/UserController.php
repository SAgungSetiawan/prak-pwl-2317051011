<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Models\Kelas;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    // 🔹 Method create()
    public function create()
    {
        $kelas = Kelas::all(); // ambil semua data kelas
        $title = "Buat Pengguna Baru";

        return view('create_user', compact('kelas', 'title'));
    }

    // 🔹 Method store() (simpan data user baru)
    public function store(Request $request)
    {
        $this->userModel->create([
            'nama'     => $request->input('nama'),
            'npm'      => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->to('/user');
    }

    // 🔹 Method index() (list user)
    public function index()
    {
        $users = $this->userModel->getUser();
        $title = "Daftar User";

        return view('list_user', compact('users', 'title'));
    }
}
