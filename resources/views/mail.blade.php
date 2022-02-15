<!DOCTYPE html>
<html>
    <head>
        <title>Email Sender</title>
        <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    </head>
    <body>
        <div class="main-content">
            <header>
                <h1>Email Sender</h1>
                <div>
                    <a href="/">Home</a>
                </div>
            </header>
            <p>Send mail to users on click.</p>
            <form action="/send" method="POST">
                @csrf
                <button>Send</button>
            </form>
            <p id="msg">{{$msg}}</p>
        </div>
        <footer>
            <p>Created by Kasim C.</p>
        </footer>
        <script>
            const form = document.getElementsByTagName('form');
            const msg = document.getElementById('msg')
            form[0].addEventListener('submit', () => {
                msg.textContent = ''
            })
        </script>
    </body>
</html