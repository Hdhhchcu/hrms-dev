@extends('layout.main')

@section('content')
<div class="container mx-auto p-4">
    <ul id="messages">
        @foreach ($messages as $msg)
            <li><strong>{{ $msg->sender->name }}:</strong> {{ $msg->message }}</li>
        @endforeach
    </ul>

    <form id="sendForm" class="mt-4">
        <input id="messageInput" type="text" placeholder="Type a message..." class="border p-2 w-1/2">
        <button type="submit" class="bg-blue-500 text-white p-2">Send</button>
    </form>
</div>

<script src="https://unpkg.com/@laravel/echo"></script>
<script>
    window.Echo = new Echo({
        broadcaster: 'reverb',
        key: '',
        wsHost: window.location.hostname,
        wsPort: 8080,
        wssPort: 8080,
        forceTLS: false,
        disableStats: true,
    });

    Echo.private('chat.{{ $chat->id }}')
        .listen('.message.sent', (e) => {
            let li = document.createElement('li');
            li.innerHTML = `<strong>${e.message.sender.name}:</strong> ${e.message.message}`;
            document.getElementById('messages').appendChild(li);
        });

    document.getElementById('sendForm').addEventListener('submit', function(e) {
        e.preventDefault();
        fetch('{{ route('chat.send', $chat->id) }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            body: JSON.stringify({
                message: document.getElementById('messageInput').value
            })
        });
        document.getElementById('messageInput').value = '';
    });
</script>
@endsection
