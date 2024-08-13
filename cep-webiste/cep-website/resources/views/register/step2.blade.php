@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Register - Step 2</h2>
    <form method="POST" action="{{ route('signup.step2') }}">
        @csrf
        <label for="first-name">First Name *</label>
        <input type="text" id="first-name" name="first-name" value="{{ old('first-name') }}" required>

        <label for="last-name">Last Name *</label>
        <input type="text" id="last-name" name="last-name" value="{{ old('last-name') }}" required>

        <label for="age">Age *</label>
        <input type="number" id="age" name="age" value="{{ old('age') }}" required>

        <label for="gender">Gender *</label>
        <select id="gender" name="gender" required>
            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
            <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
        </select>

        <label for="location">Location *</label>
        <select id="location" name="location" required>
            <option value="diepsloot" {{ old('location') == 'diepsloot' ? 'selected' : '' }}>Diepsloot</option>
            <option value="alexander" {{ old('location') == 'alexander' ? 'selected' : '' }}>Alexander</option>
            <option value="soweto" {{ old('location') == 'soweto' ? 'selected' : '' }}>Soweto</option>
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
    document.addEventListener('DOMContentLoaded', function() {
        var locationSelect = document.getElementById('location');
        var extensions = {
            diepsloot: document.getElementById('extension-diepsloot'),
            alexander: document.getElementById('extension-alexander'),
            soweto: document.getElementById('extension-soweto')
        };

        function updateExtensions() {
            var selectedLocation = locationSelect.value;
            for (var key in extensions) {
                if (extensions.hasOwnProperty(key)) {
                    extensions[key].style.display = (key === selectedLocation) ? 'block' : 'none';
                }
            }
        }

        locationSelect.addEventListener('change', updateExtensions);

        // Initial call to handle preselected values
        updateExtensions();
    });
</script>
@endsection
