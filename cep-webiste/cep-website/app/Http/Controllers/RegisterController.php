<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function showStep1()
    {
        return view('register.step1');
    }

    public function postStep1(Request $request)
    {
        // Validate and store the data in session
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|string|confirmed|min:6',
        ]);

        // Store the data in the session
        Session::put('step1', $request->except('_token'));

        return redirect()->route('register.step2');
    }

    public function showStep2()
    {
        return view('register.step2');
    }

    public function postStep2(Request $request)
    {
        // Validate and store the data in session
        $request->validate([
            'first-name' => 'required|string|max:255',
            'last-name' => 'required|string|max:255',
            'age' => 'required|integer',
            'gender' => 'required|string',
            'location' => 'required|string',
        ]);

        // Store the data in the session
        Session::put('step2', $request->except('_token'));

        return redirect()->route('register.step3');
    }

    public function showStep3()
    {
        return view('register.step3');
    }

    public function postStep3(Request $request)
    {
        // Validate the final step
        $request->validate([
            'home-language' => 'required|string',
            'mobile-number' => 'required|string',
            'email' => 'required|email', // Ensure consistent naming with step 1
            'industry' => 'required|string',
        ]);

        // Store the data in the session
        Session::put('step3', $request->except('_token'));

        // Combine all steps and save the final data to the database
        $data = array_merge(
            Session::get('step1'),
            Session::get('step2'),
            Session::get('step3')
        );

        // Save $data to the database...
        // Example:
        // User::create($data);

        // Clear the session data
        Session::forget(['step1', 'step2', 'step3']);

        return redirect()->route('home')->with('success', 'Registration completed!');
    }
}

