<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Login</title>
    @php
        $profiles = App\Models\profile::all();
    @endphp
    @foreach ($profiles as $profile)
        <link rel="icon" href="imgProfile/{{$profile->gambar}}">
    @endforeach
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="input-box">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="name" placeholder="Name" required>
                    </div>
                    <div class="input-box">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn-login">Login</button>
                </form>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const inputFields = document.querySelectorAll('.input-box input');

            inputFields.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentNode.classList.add('focused');
                });

                input.addEventListener('blur', function() {
                    if (this.value === '') {
                        this.parentNode.classList.remove('focused');
                    }
                });
            });
        });
    </script>
</body>
</html>
