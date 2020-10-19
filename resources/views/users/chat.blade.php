<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat Box</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/chat.css') }}">
</head>
<body>
    <div class="col-lg-4 col-lg-offset-4">
        <h1 class="chat-header">Welcome, <span id="username">{{ $username }}</span></h1>
        <div class="chat-window col-lg-12"></div>
        <div class="col-lg-12">
            <div id="typingStatus" class="col-lg-12" style="padding: 15px;"></div>
            <input type="text" id="text" name="text" class="form-control col-lg-12"
                autofocus="" onblur="notTyping()">
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js "></script>
    <script src="{{ asset('js/frontend_js/chat.js') }}"></script>
</body>
</html>