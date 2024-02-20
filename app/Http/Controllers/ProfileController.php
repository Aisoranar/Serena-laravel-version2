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
        $editing = false; // Puedes establecer esto en true cuando se active el modo de edición
        return view('services.profile', compact('user', 'editing'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:1024', // Tamaño máximo de 1MB
        ]);

        // Procesar la imagen si se proporciona
        if ($request->hasFile('profile_image')) {
            $imagePath = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile_image = $imagePath;
        }

        $user->update([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
        ]);

        return redirect()->route('profile.show')->with('success', 'Perfil actualizado correctamente.');
    }
}
