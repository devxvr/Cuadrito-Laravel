// app/Http/Controllers/AccountController.php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function profile()
    {
        return view('account.profile', [
            'user' => Auth::user()
        ]);
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$user->id,
        ]);

        $user->update($validatedData);

        return redirect()->route('account.profile')
            ->with('success', 'Profile updated successfully');
    }
}