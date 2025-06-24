<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Penting: Impor model User
use Illuminate\Validation\Rule; // PENTING: Impor ini untuk Rule::in

class UserController extends Controller
{
    /**
     * Menampilkan daftar semua pengguna.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all(); // Ambil semua pengguna dari tabel 'users'
        return view('admin.users.index', compact('users'));
    }

    /**
     * Menampilkan formulir untuk membuat pengguna baru.
     * (Anda bisa menambahkan logika di sini jika ingin admin bisa membuat user)
     */
    public function create()
    {
        // return view('admin.users.create');
        // Untuk saat ini, kita akan fokus pada edit/update
        abort(404, 'Fitur tambah user via admin belum diimplementasikan.');
    }

    /**
     * Menyimpan pengguna baru ke database.
     */
    public function store(Request $request)
    {
        // Logika untuk menyimpan user baru (jika create() diaktifkan)
        // abort(404, 'Fitur simpan user via admin belum diimplementasikan.');
    }

    /**
     * Menampilkan detail pengguna.
     */
    public function show(User $user)
    {
        // return view('admin.users.show', compact('user'));
        abort(404, 'Fitur detail user belum diimplementasikan.');
    }

    /**
     * Menampilkan formulir untuk mengedit pengguna tertentu.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Memperbarui pengguna tertentu di database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'role' => ['required', 'string', Rule::in(['admin', 'user'])], // PENTING: Validasi role hanya 'admin' atau 'user'
            // Tambahkan validasi untuk password jika ada input password di form dan ingin mengubahnya
            'password' => 'nullable|string|min:8|confirmed', // 'confirmed' berarti ada 'password_confirmation'
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role; // PENTING: Update role dari input form

        // Tangani update password jika password diisi
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'Pengguna berhasil diperbarui!');
    }

    /**
     * Menghapus pengguna dari database.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'Pengguna berhasil dihapus!');
    }
}