<!DOCTYPE html>
<html>
    <head>
        <title>Email Sender</title>
        <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
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
                <?php echo csrf_field(); ?>
                <button>Send</button>
            </form>
            <p id="msg"><?php echo e($msg); ?></p>
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
</html<?php /**PATH C:\xampp\htdocs\email-sender\resources\views/mail.blade.php ENDPATH**/ ?>