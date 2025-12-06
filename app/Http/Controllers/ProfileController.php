<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function uploadProfile(Request $request)
    {
        $request->validate([
            'profile_image' => 'required|image|max:2048',
        ]);
        $path = $request->file('profile_image')->store('profile', 'public');
        return back()->with('success', 'Profile Photo Uploaded')->with('image', $path);
    }
}
