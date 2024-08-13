<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-gradient {
            background: linear-gradient(to right, #1a1a1a, #333); /* Light black gradient */
        }
        .btn-primary {
            background-color: #333; /* Dark black for buttons */
            color: white;
        }
        .btn-primary:hover {
            background-color: #555; /* Lighter black on hover */
        }
        .input-focus:focus {
            border-color: #555; /* Lighter black border on focus */
            box-shadow: 0 0 0 3px rgba(85, 85, 85, 0.5); /* Light black shadow */
        }
        .card-bg {
            background-color: #1a1a1a; /* Light black background for card */
            color: #e0e0e0; /* Light gray text */
        }
        .map-container {
            height: 400px;
            width: 100%;
            border-radius: 0.75rem;
            overflow: hidden;
            margin-top: 2rem;
        }
    </style>
</head>
<body class="bg-gradient flex flex-col items-center min-h-screen p-4">
    <div class="card-bg p-8 rounded-lg shadow-lg max-w-4xl w-full">
        <h1 class="text-4xl font-bold mb-8 text-center">Contact Us</h1>
        <form action="/contact" method="POST" class="space-y-6">
            <div>
                <label for="name" class="block text-lg font-medium">Full Name</label>
                <input type="text" id="name" name="name"
                       class="mt-2 block w-full px-4 py-2 border border-gray-600 rounded-md shadow-sm input-focus transition duration-300 ease-in-out"
                       required>
            </div>
            <div>
                <label for="email" class="block text-lg font-medium">Email Address</label>
                <input type="email" id="email" name="email"
                       class="mt-2 block w-full px-4 py-2 border border-gray-600 rounded-md shadow-sm input-focus transition duration-300 ease-in-out"
                       required>
            </div>
            <div>
                <label for="message" class="block text-lg font-medium">Message</label>
                <textarea id="message" name="message" rows="4"
                          class="mt-2 block w-full px-4 py-2 border border-gray-600 rounded-md shadow-sm input-focus transition duration-300 ease-in-out"
                          required></textarea>
            </div>
            <button type="submit"
                    class="w-full px-4 py-2 rounded-md btn-primary font-semibold hover:bg-opacity-90 transition duration-300 ease-in-out">
                Send Message
            </button>
            <div class="mt-4 text-center">
                <a href="/" class="text-gray-400 hover:underline">
                    Back to Home
                </a>
            </div>
        </form>
    </div>

    <!-- Map Section -->
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.3353860139334!2d-122.41941568468153!3d37.77492927975997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808a1b834e3d%3A0x42e94df0a464e7ea!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1643100658132!5m2!1sen!2sin"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</body>
</html>
