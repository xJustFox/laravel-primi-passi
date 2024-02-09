<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Dashboard</title>
        <style>
            .content-nav{
                height: 70px;
            }
            ul li{
                padding: 0 10px;
            }
            ul li:hover{
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <header>
            <div class=" container-fluid ">
                <div class="row justify-content-end">
                    <div class="col">
                        <div class="content-nav">
                            <ul class="list-unstyled h-100 m-0 d-flex align-items-center justify-content-center ">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li><a href="{{route('about_us')}}">About Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <h1 class="text-center">This is Dashboard</h1>
    </body>
</html>