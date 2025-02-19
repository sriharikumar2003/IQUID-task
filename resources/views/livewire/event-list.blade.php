<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-lg border border-gray-200">
    <h2 class="text-3xl font-bold text-center text-blue-700 mb-6">Event Creation</h2>

    <form action="{{ route('events.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="event_name" class="block text-md font-medium text-gray-700">Name</label>
            <input type="text" id="event_name" name="name" required 
                   class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div>
            <label for="event_date" class="block text-md font-medium text-gray-700">Date</label>
            <input type="datetime-local" id="event_date" name="date" required min="{{ now()->format('Y-m-d\TH:i') }}"
                   class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-200 shadow-md">
            Create
        </button>
    </form>

    @if (session('success'))
        <div class="mt-4 bg-green-100 border-l-4 border-green-500 text-green-700 p-3 rounded">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="mt-4 bg-red-100 border-l-4 border-red-500 text-red-700 p-3 rounded">
            {{ session('error') }}
        </div>
    @endif

    <h3 class="text-xl font-bold mt-6 text-blue-700">Events on the way....!</h3>
    <ul class="mt-4 divide-y divide-gray-200">
        @foreach($events as $event)
            <li class="py-3 flex justify-between items-center">
                <div>
                    <strong class="text-blue-900">{{ $event->name }}</strong>
                    <span class="block text-gray-600">{{ $event->date->format('F d, Y') }}</span>
                    <span class="text-gray-500 text-sm">Attendees: {{ $event->attendees_count }}</span>
                </div>
                <div>
                    @if(auth()->check())
                        @if($rsvpStatus[$event->id] ?? false)
                            <button wire:click="withdrawRsvp({{ $event->id }})" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                I'm not attending
                            </button>
                        @else
                            <button wire:click="rsvp({{ $event->id }})" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
                                I'm attending
                            </button>
                        @endif

                        @if(auth()->user()->role === 'admin')
                            <button wire:click="removeEvent({{ $event->id }})" class="bg-gray-500 text-white px-3 py-1 rounded ml-2 hover:bg-gray-600">
                                Delete
                            </button>
                        @endif
                    @else
                        <span class="text-gray-500">Login to RSVP</span>
                    @endif
                </div>
            </li>
        @endforeach
    </ul>
</div>
