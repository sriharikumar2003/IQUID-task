<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 flex items-center justify-center h-screen">

<h1 class="text-center font-bold text-3xl text-white absolute top-8">Welcome Back!!!</h1>

<div class="flex items-center justify-center w-full">
    <div class="bg-white/10 backdrop-blur-lg p-8 rounded-xl shadow-xl w-96 border border-gray-700">
        <h2 class="text-2xl font-bold text-center mb-6 text-white">Login</h2>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-md font-medium text-gray-300">Email:</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-2 border border-gray-500 rounded-md shadow-sm bg-gray-800 text-white focus:ring-blue-500 focus:border-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="password" class="block text-md font-medium text-gray-300">Password:</label>
                <input type="password" id="password" name="password" class="mt-1 block w-full px-4 py-2 border border-gray-500 rounded-md shadow-sm bg-gray-800 text-white focus:ring-blue-500 focus:border-blue-500" required>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-400">
                Login
            </button>
        </form>

        <div class="mt-4 text-center">
            <a href="{{ route('register.form') }}" class="text-blue-400 hover:text-blue-500">Don't have an account? Register here</a>
        </div>
    </div>
</div>

</body>
</html>
