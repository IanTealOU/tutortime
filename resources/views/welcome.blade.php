<!doctype html>

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TutorTime</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #9900cc;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #9900cc;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
                <div class="top-right links">
                    
                        <a href="login.blade.php">Login</a>
                        <a href="loginStudent.blade.php">Student Register</a>                        						
                    
                </div>
            

            <div class="content">
                <div class="title m-b-md">
                    TutorTime
                </div>

                <div class="links">
                    <a href="https://www.oakland.edu/"class="w3-bar-item w3-button">AboutUs</a>
                    <a href="https://www.merriam-webster.com/dictionary/dictionary"class="w3-bar-item w3-button">Dictionary</a>
                    <a href="http://www.edweek.org/tm/index.html"class="w3-bar-item w3-button">TeacherNews</a>
                    <a href="https://www.britannica.com/class="w3-bar-item w3-button"">Encyclopedia</a>
                    <a href="https://www.oakland.edu/"class="w3-bar-item w3-button">ContactUs</a>
                </div>
            </div>
        </div>
    </body>
</html>