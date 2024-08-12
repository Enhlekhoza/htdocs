<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-gradient {
            background: linear-gradient(to right, #FFD700, #FFA500);
        }
        .btn-primary {
            background-color: #FFD700;
            color: black;
        }
        .btn-primary:hover {
            background-color: #FFC107;
        }
        .input-focus:focus {
            border-color: #FFD700;
            box-shadow: 0 0 0 3px rgba(255, 215, 0, 0.5);
        }
    </style>
</head>
<body class="bg-gradient flex items-center justify-center min-h-screen">
    <div class="bg-black text-yellow-300 p-8 rounded-lg shadow-lg max-w-md w-full">
        <h1 class="text-3xl font-bold mb-6 text-center">Sign In</h1>
        <form action="/login" method="POST">
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-yellow-300">Email Address</label>
                <input type="email" id="email" name="email"
                       class="mt-1 block w-full px-4 py-2 border border-yellow-300 rounded-md shadow-sm input-focus transition duration-300 ease-in-out"
                       required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-yellow-300">Password</label>
                <input type="password" id="password" name="password"
                       class="mt-1 block w-full px-4 py-2 border border-yellow-300 rounded-md shadow-sm input-focus transition duration-300 ease-in-out"
                       required>
            </div>
            <button type="submit"
                    class="w-full px-4 py-2 rounded-md btn-primary font-semibold hover:bg-opacity-90 transition duration-300 ease-in-out">
                Sign In
            </button>
            <div class="mt-4 text-center">
                <a href="/signup" class="text-yellow-400 hover:underline">
                    Don't have an account? Sign up
                </a>
            </div>
        </form>
    </div>
</body>
</html>
