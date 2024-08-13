<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-light-black {
            background-color: #1a1a1a; /* Light black background */
        }
        .btn-primary {
            background-color: #333; /* Darker black for buttons */
            color: white;
        }
        .btn-primary:hover {
            background-color: #555; /* Lighter black on hover */
        }
        .input-focus:focus {
            border-color: #555; /* Light black border color on focus */
            box-shadow: 0 0 0 3px rgba(85, 85, 85, 0.5); /* Light black shadow */
        }
        .text-light {
            color: #e0e0e0; /* Light gray text */
        }
    </style>
</head>
<body class="bg-light-black flex items-center justify-center min-h-screen">
    <div class="bg-black text-light p-8 rounded-lg shadow-lg max-w-md w-full">
        <h1 class="text-3xl font-bold mb-6 text-center">Sign In</h1>
        <form action="/login" method="POST">
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-light">Email Address</label>
                <input type="email" id="email" name="email"
                       class="mt-1 block w-full px-4 py-2 border border-light rounded-md shadow-sm input-focus transition duration-300 ease-in-out"
                       required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-light">Password</label>
                <input type="password" id="password" name="password"
                       class="mt-1 block w-full px-4 py-2 border border-light rounded-md shadow-sm input-focus transition duration-300 ease-in-out"
                       required>
            </div>
            <button type="submit"
                    class="w-full px-4 py-2 rounded-md btn-primary font-semibold hover:bg-opacity-90 transition duration-300 ease-in-out">
                Sign In
            </button>
            <div class="mt-4 text-center">
                <a href="/signup" class="text-light hover:underline">
                    Don't have an account? Sign up
                </a>
            </div>
        </form>
    </div>
</body>
</html>
