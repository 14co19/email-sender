<!DOCTYPE html>
<html>
    <head>
        <title>Email Sender</title>
    </head>
    <body>
        <h1>{{ $sender['title'] }}</h1>
        <p>{{ $sender['body']}}</p>
        <span>From {{ $sender['from'] }}</span>
        <p>Thank You.</p>
    </body>
</html>