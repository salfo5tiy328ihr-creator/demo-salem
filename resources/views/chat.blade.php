
<!DOCTYPE html>
<html>
<head>
    <title>Laravel Chatbot</title>
</head>
<body>

    <h1>Laravel Chatbot</h1>

    <div id="chat"></div>

    <input type="text" id="message" placeholder="Ask something...">

    <button type="button" onclick="sendMessage()">Send</button>

    <script>
        function sendMessage() {

            let message = document.getElementById('message').value;

            fetch('/chat/ask', {
                method: 'POST',

                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },

                body: JSON.stringify({
                    message: message
                })
            })
            .then(response => response.json())
            .then(data => {

                document.getElementById('chat').innerHTML =
                    JSON.stringify(data.message);

            });
        }
    </script>

</body>
</html>
