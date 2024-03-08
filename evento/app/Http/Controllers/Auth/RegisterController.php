<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function index() : View
    {
        return view('auth.register');
    }

    public function storeCandidat(Request $request) {

        $attributes = $request->validate([
            'title' => 'required',
            'about_section' => 'required',
            'address' => 'required',
            'contact_info' => 'required',
            'current_position' => 'required'
        ]);

        $user = $this->storeUser($request);
        $user->candidat()->create($attributes);

        return redirect()->route('login')->with('success', 'You have signed up successfully');
    }

    public function storeCompany(Request $request) {

        $attributes = $request->validate([
            'description' => 'required',
            'industry' => 'required',
            'slogan' => 'required'
        ]);

        $user = $this->storeUser($request);
        $user->company()->create($attributes);

        return redirect()->route('login')->with('success', 'You have signed up successfully');
    }

    public function storeUser(Request $request) {
        $attributes = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
//            'image_url' => 'required|image'
        ]);

        $attributes = array_merge($attributes, [
            'image_url' => $request->file('image_url')->store('uploads')
        ]);

        return User::create($attributes);
    }
}
