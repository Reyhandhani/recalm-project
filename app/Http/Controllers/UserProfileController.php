<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;


class UserProfileController extends Controller
{
    public function update(Request $request)
    {
        $user = Auth::user();


        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'photo' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        // Cek apakah ada perubahan nama atau email
        if ($user->name === $request->name && $user->email === $request->email && !$request->hasFile('photo')) {
            return redirect()->back()->withErrors(['message' => 'Tidak ada perubahan pada data Anda.']);
        }

        // Simpan nama dan email
        $user->name = $request->name;
        $user->email = $request->email;

        // Update foto jika ada file baru
        if ($request->hasFile('photo')) {
            // Hapus file lama jika ada
            if ($user->photo && Storage::exists('public/' . $user->photo)) {
                Storage::delete('public/' . $user->photo);
            }

            // Simpan file baru
            $path = $request->file('photo')->store('profile_photos', 'public');
            $user->photo = $path;
        }

        // Simpan perubahan
        $user->save();

        return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
    }
}

