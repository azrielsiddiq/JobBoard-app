<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminPenggunaController extends Controller
{
    public function index()
    {
        $pengguna = User::all();
        return view('admin.pengguna.akun-pelamar', compact('pengguna'));

    }

    public function create()
    {
        return view('admin.pengguna.tambah-akun');
    }

    public function store(Request $request)
    {
$request->validate([
    'name'  => [
        'required',
        'regex:/^[A-Za-z\s]+$/',
        'max:255'
    ],
    'email' => [
        'required',
        'email',
        'regex:/^[a-zA-Z0-9._%+-]+@gmail\.com$/',
        'unique:users,email',
    ],
    'role'  => 'required|in:admin,pelamar',
], [
    'name.regex' => 'Nama hanya boleh berisi huruf dan spasi.',
    'email.regex' => 'Email harus menggunakan domain @gmail.com.',
    'email.email' => 'Format email tidak valid.',
    'email.required' => 'Email tidak boleh kosong.',
    'email.unique' => 'Email sudah digunakan.',
]);




        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => $request->role,
        ]);

        Alert::success('Success Title', 'Pengguna berhasil ditambahkan!');
        return redirect()->route('admin.pengguna');
    }

    public function edit($id)
    {
        $pengguna = User::findOrFail($id);
        return view('admin.pengguna.edit-akun', compact('pengguna'));
    }

    public function update(Request $request, $id)
    {
        $pengguna = User::findOrFail($id);

$request->validate([
    'name'  => [
        'required',
        'regex:/^[A-Za-z\s]+$/',
        'max:255'
    ],
    'email' => [
        'required',
        'email',
        'regex:/^[a-zA-Z0-9._%+-]+@gmail\.com$/',
        'unique:users,email,' . $pengguna->id,
    ],
    'role'  => 'required|in:admin,pelamar',
], [
    'name.regex' => 'Nama hanya boleh berisi huruf dan spasi.',
    'email.regex' => 'Email harus menggunakan domain @gmail.com.',
    'email.email' => 'Format email tidak valid.',
    'email.required' => 'Email tidak boleh kosong.',
    'email.unique' => 'Email sudah digunakan.',
]);




        $pengguna->update([
            'name'  => $request->name,
            'email' => $request->email,
            'role'  => $request->role,
        ]);

        Alert::success('Success Title', 'Pengguna berhasil diupdate!');
        return redirect()->route('admin.pengguna');
    }

    public function destroy($id)
{
    $pengguna = User::findOrFail($id);
    $pengguna->delete();

    Alert::success('Success Title', 'Pengguna berhasil dihapus!');
    return redirect()->route('admin.pengguna');
}

}
