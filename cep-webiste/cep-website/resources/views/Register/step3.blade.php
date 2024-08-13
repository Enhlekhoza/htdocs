@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Register - Step 3</h2>
    <form method="POST" action="{{ route('register.step3') }}">
        @csrf
        <label for="home-language">Home Language *</label>
        <select id="home-language" name="home-language" required>
            <option value="english">English</option>
            <option value="zulu">Zulu</option>
            <option value="xitsonga">Xitsonga</option>
            <!-- Add more languages as needed -->
        </select>

        <label for="mobile-number">Mobile Number *</label>
        <input type="text" id="mobile-number" name="mobile-number" value="{{ old('mobile-number') }}" required>

        <label for="email-address">Email Address *</label>
        <input type="email" id="email-address" name="email-address" value="{{ old('email-address') }}" required>

        <label for="business-name">Business Name</label>
        <input type="text" id="business-name" name="business-name" value="{{ old('business-name') }}">

        <label for="industry">Industry *</label>
        <select id="industry" name="industry" required>
            <option value="it">Information Technology</option>
            <option value="finance">Finance</option>
            <option value="retail">Retail</option>
            <option value="healthcare">Healthcare</option>
            <!-- Add more industries as needed -->
        </select>

        <button type="submit">Complete Registration</button>
    </form>
</div>
@endsection
