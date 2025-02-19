<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="container d-flex justify-content-center align-items-center vh-100 bg-light">

    <div class="p-5 bg-white rounded-lg shadow-lg border border-gray-300 text-center w-50">
        <h2 class="mb-3 fw-bold text-primary text-uppercase">Join & Create Exciting Events! 🎉</h2>

        <h1 class="mb-4 text-dark fw-bold display-5">RSVP Event Management</h1>

        <p class="text-muted">Be a part of amazing events. Sign up to create and join events effortlessly!</p>

        <div class="d-flex justify-content-center gap-3 mt-4">
            <a href="{{ route('register.form') }}" class="btn btn-primary btn-lg px-4 shadow-sm">Sign Up</a>
            <a href="{{ route('login.form') }}" class="btn btn-secondary btn-lg px-4 shadow-sm">Login</a>
        </div>
    </div>

</body>
</html>
