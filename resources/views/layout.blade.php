<!DOCT<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        @vite('resources/css/app.css')

        <title>LaraJob</title>
    </head>

    <body class="mb-48">


        <main>
            @yield('content')

        </main>
        <footer
            class=" fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-blue-800 text-white h-20 mt-24 opacity-90 md:justify-center">
            <p class="ml-2">Copyright &copy; 2023, All Rights reserved
                <br>
                Created By : Ali Alshikh
            </p>



        </footer>

    </body>

    </html>
