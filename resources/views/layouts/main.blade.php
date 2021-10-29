<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Website</title>

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">



</head>
<body class="font-serif bg-base-100 text-dark">
    
    <nav class="border-b border-gray-500">

        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-4">
            <ul class="flex flex-col md:flex-row items-center">
                <li><a href="#"><i class="fas fa-film text-3xl"></i></a></li>
                <li class="ml-4"><a href="#" class="text-xl">VavaMovie</a></li>

                <li class="md:ml-16 mt-3 md:mt-0"><a href="#" class="hover:text-gray-300">Movies</a></li>
                <li class="md:ml-8 mt-3 md:mt-0"><a href="#" class="hover:text-gray-300">Series</a></li>
                <li class="md:ml-8 mt-3 md:mt-0"><a href="#" class="hover:text-gray-300">Actors</a></li>

            </ul>

            <div class="flex items-center flex-col md:flex-row">
                <div class="relative mt-3 md:mt-0">
                    <input type="text" class="bg-gray-200 rounded-full w-64 px-4 py-1 pl-10 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50" placeholder="Search">
                

                    <div class="absolute top-0">
                        <span class="text-gray-400"><i class="fas fa-search mt-2 ml-3"></i></span>
                    </div>

                </div>

                <div class="md:ml-4 mt-4 md:mt-0">
                    <img src="/img/avatar.jpg" class="rounded-full w-8 h-8">
                </div>
                
            </div>

           

        </div>

    </nav>

    @yield('content')

</body>
</html>