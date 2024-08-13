@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Register - Step 3</h2>
    <form method="POST" action="{{ route('register.step3') }}">
        @csrf

        <label for="home-language">Home Language *</label>
        <select id="home-language" name="home-language" required>
            <option value="" disabled {{ old('home-language') ? '' : 'selected' }}>Select Language</option>
            <option value="english" {{ old('home-language') == 'english' ? 'selected' : '' }}>English</option>
            <option value="zulu" {{ old('home-language') == 'zulu' ? 'selected' : '' }}>Zulu</option>
            <option value="xitsonga" {{ old('home-language') == 'xitsonga' ? 'selected' : '' }}>Xitsonga</option>
            <!-- Add more languages as needed -->
        </select>
        @error('home-language')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <label for="mobile-number">Mobile Number *</label>
        <input type="text" id="mobile-number" name="mobile-number" value="{{ old('mobile-number') }}" required>
        @error('mobile-number')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <label for="email-address">Email Address *</label>
        <input type="email" id="email-address" name="email-address" value="{{ old('email-address') }}" required>
        @error('email-address')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <label for="business-name">Business Name</label>
        <input type="text" id="business-name" name="business-name" value="{{ old('business-name') }}">
        @error('business-name')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <label for="industry">Industry *</label>
        <select id="industry" name="industry" required>
            <option value="" disabled {{ old('industry') ? '' : 'selected' }}>Select Industry</option>
            <option value="it" {{ old('industry') == 'it' ? 'selected' : '' }}>Information Technology</option>
            <option value="finance" {{ old('industry') == 'finance' ? 'selected' : '' }}>Finance</option>
            <option value="retail" {{ old('industry') == 'retail' ? 'selected' : '' }}>Retail</option>
            <option value="healthcare" {{ old('industry') == 'healthcare' ? 'selected' : '' }}>Healthcare</option>
            <!-- Add more industries as needed -->
        </select>
        @error('industry')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <button type="submit">Complete Registration</button>
    </form>
</div>
@endsection
