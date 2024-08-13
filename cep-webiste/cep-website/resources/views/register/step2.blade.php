@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Register - Step 2</h2>
    <form method="POST" action="{{ route('register.step2') }}">
        @csrf
        <label for="first-name">First Name *</label>
        <input type="text" id="first-name" name="first-name" value="{{ old('first-name') }}" required>

        <label for="last-name">Last Name *</label>
        <input type="text" id="last-name" name="last-name" value="{{ old('last-name') }}" required>

        <label for="age">Age *</label>
        <input type="number" id="age" name="age" value="{{ old('age') }}" required>

        <label for="gender">Gender *</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

        <label for="location">Location *</label>
        <select id="location" name="location" required>
            <option value="diepsloot">Diepsloot</option>
            <option value="alexander">Alexander</option>
            <option value="soweto">Soweto</option>
            <!-- Add more locations as needed -->
        </select>

        <!-- Conditional Extensions based on Location -->
        <div id="extension-diepsloot" style="display: none;">
            <label for="extension-diepsloot">Extension (If Diepsloot) *</label>
            <input type="text" id="extension-diepsloot" name="extension-diepsloot" value="{{ old('extension-diepsloot') }}">
        </div>

        <div id="extension-alexander" style="display: none;">
            <label for="extension-alexander">Extension (If Alexander) *</label>
            <input type="text" id="extension-alexander" name="extension-alexander" value="{{ old('extension-alexander') }}">
        </div>

        <div id="extension-soweto" style="display: none;">
            <label for="extension-soweto">Extension (If Soweto) *</label>
            <input type="text" id="extension-soweto" name="extension-soweto" value="{{ old('extension-soweto') }}">
        </div>

        <button type="submit">Next</button>
    </form>
</div>

<script>
    // JavaScript to handle showing/hiding the extension fields based on location selection
    document.getElementById('location').addEventListener('change', function () {
        var location = this.value;
        document.getElementById('extension-diepsloot').style.display = (location === 'diepsloot') ? 'block' : 'none';
        document.getElementById('extension-alexander').style.display = (location === 'alexander') ? 'block' : 'none';
        document.getElementById('extension-soweto').style.display = (location === 'soweto') ? 'block' : 'none';
    });
</script>
@endsection
