<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center py-10">
    <div class="w-full max-w-lg bg-white p-6 rounded-lg shadow-xl border border-gray-300">
        <h2 class="text-2xl font-semibold text-center text-purple-700 mb-4">Create a New Event</h2>
        <form action="{{ route('events.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="event_name" class="block text-md font-medium text-gray-800">Name</label>
                <input type="text" id="event_name" name="name" required 
                       class="w-full mt-1 px-4 py-2 border rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">
            </div>

            <div>
                <label for="event_date" class="block text-md font-medium text-gray-800">Date</label>
                <input type="datetime-local" id="event_date" name="date" required min="{{ now()->format('Y-m-d\TH:i') }}"
                       class="w-full mt-1 px-4 py-2 border rounded-md shadow-sm focus:ring-purple-500 focus:border-purple-500">
            </div>

            <button type="submit" class="w-full bg-purple-600 text-white py-2 rounded-md hover:bg-purple-700 transition duration-200 shadow-lg">
                Create Event
            </button>
        </form>
    </div>

    <div class="mt-8 w-full max-w-lg bg-white p-6 rounded-lg shadow-xl border border-gray-300">
        <h3 class="text-xl font-semibold text-purple-700 mb-4 text-center">Upcoming Events</h3>
        <ul class="divide-y divide-gray-300">
            @foreach($events as $event)
                <li class="py-3">
                    <strong class="text-purple-900">{{ $event->name }}</strong>
                    <span class="block text-gray-700">{{ $event->date->format('Y-m-d H:i') }}</span>
                </li>
            @endforeach
        </ul>
    </div>

</body>
</html>
