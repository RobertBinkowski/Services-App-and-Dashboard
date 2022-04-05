<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body class="antialiased">
    <main>
        <header>
            <nav>
                <a href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                @endif
            </nav>
        </header>
        @php
            //Database Connection Check
            $users = DB::select('SELECT * FROM `servicesapp`.`users` LIMIT 1000;');
            foreach ($users as $customer => $value) {
                echo 'Checking connection to the database:<br>';
                echo $value->name;
                echo '<br>';
                echo $value->email;
            }
        @endphp

    </main>
    <footer>
        //Create a static footer

        <img src="#" alt="logo" class="nav-logo">

        <br>
        <p>Links</p>
        <a href="https://robertbinkowski.me/" target="_blanc">
            Website
        </a>
        <a href="https://docs.google.com/document/d/1SQ6XWF39Ibd1BbfVPTALshtNB7liDILF/view" target="_blanc">
            Resume
        </a>
        <a href="https://www.linkedin.com/in/robert-binkowski-9bb565195/" target="_blanc">
            LinkedIn
        </a>
        <a href="https://github.com/RobertBinkowski" target="_blanc">
            GitHub
        </a>

        <p>All Rights Reserved to <a href="https://robertbinkowski.me/">Robert Binkowski</a> <br> 2022 -
            <script>
                document.write(/\d{4}/.exec(Date())[0])
            </script>
        </p>
    </footer>
</body>

</html>
