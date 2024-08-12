<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-gradient {
            background: linear-gradient(to right, #FFD700, #FFA500);
            background-size: 200% 200%;
            animation: gradientAnimation 5s ease infinite;
        }
        @keyframes gradientAnimation {
            0% { background-position: 0% 0%; }
            50% { background-position: 100% 100%; }
            100% { background-position: 0% 0%; }
        }
        .btn-primary {
            background-color: #FFD700;
            color: black;
            border: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #FFC107;
            transform: scale(1.05);
        }
        .input-focus:focus {
            border-color: #FFD700;
            box-shadow: 0 0 0 3px rgba(255, 215, 0, 0.5);
        }
        .card-bg {
            background-color: #1a1a1a;
            color: #FFD700;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .card-bg::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 215, 0, 0.1), transparent);
            border-radius: 0.5rem;
            z-index: 0;
        }
        .card-content {
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body class="bg-gradient flex items-center justify-center min-h-screen p-4">
    <div class="card-bg p-8 rounded-lg max-w-md w-full relative overflow-hidden">
        <div class="card-content">
            <h1 class="text-4xl font-bold mb-6 text-center">Sign Up</h1>
            <form action="/signup" method="POST">
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-yellow-300">Full Name</label>
                    <input type="text" id="name" name="name"
                           class="mt-1 block w-full px-4 py-2 border border-yellow-300 rounded-md shadow-sm input-focus transition duration-300 ease-in-out"
                           required>
                </div>
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
                        class="w-full px-4 py-2 rounded-md btn-primary font-semibold hover:bg-opacity-90">
                    Sign Up
                </button>
                <div class="mt-4 text-center">
                    <a href="/login" class="text-yellow-400 hover:underline">
                        Already have an account? Sign in
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
