@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Register - Step 1</h2>
    <form method="POST" action="{{ route('register.step1') }}">
        @csrf
        <label for="name">Name *</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>

        <label for="username">Username *</label>
        <input type="text" id="username" name="username" value="{{ old('username') }}" required>

        <label for="email">Email *</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>

        <label for="password">Password *</label>
        <input type="password" id="password" name="password" required>

        <label for="password_confirmation">Verify Password *</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>

        <label for="status">I am a *</label>
        <select id="status" name="status" required>
            <option value="student">Student</option>
            <option value="employment-seeker">Employment Seeker</option>
            <option value="employed-resident">Employed Resident</option>
            <option value="business-owner">Business Owner</option>
            <option value="ngo-npo">NGO / NPO</option>
            <option value="pensioner">Pensioner</option>
        </select>

        <button type="submit">Next</button>
    </form>
</div>
@endsection
