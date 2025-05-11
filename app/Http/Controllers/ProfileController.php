<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'nis' => 'nullable|string|max:20',
            'birth_date' => 'nullable|date',
            'address' => 'nullable|string|max:255',
            'photo' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            if ($user->photo) {
                Storage::delete($user->photo);
            }
            $path = $request->file('photo')->store('profile_photos', 'public');
            $user->photo = $path;
        }

        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->nis = $request->nis;
        $user->birth_date = $request->birth_date;
        $user->address = $request->address;
        $user->save();

        return redirect()->route('profile.show')->with('success', 'Profil berhasil diperbarui.');
    }
}
