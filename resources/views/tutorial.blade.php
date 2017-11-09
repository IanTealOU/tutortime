<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
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
                color: #636b6f;
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
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Tutorial
                </div>


                <div class = "content">

                    <p> <b> Hello! Thank you for using TutorTime! Please read the tutorials below to learn more about our app! </b> </p>

                    <p> <b> Teachers: </b> All teachers can be assigned to only one class at a time. For your convenience, admins may initially
                     set up your class for you. Later on, you can add new students to your classroom, or you can remove students who no longer attend your class.
                    If you are being assigned to a different class, you must contact an admin to make the change for you. You may change your password at any time should you forget
                    your old one or prefer to change often for increased security. As a teacher, you will see a unique home screen upon logging in. From here, you can view your students'
                    progress in any course and see what levels they are at within each course. This way, you can be sure your students are completing their work, and you can
                    track your students' progress to see what areas they may need more help in to achieve better results.</p>

                    <p> <b> Students: </b>  Welcome to Tutor Time! You can thank us for making your learning more fun and interactive by providing your classroom with this new technology!
                     Upon logging into TutorTime, you will be taken to your home page where you can modify your settings or begin your quizzes. There are currently 3 subjects you can choose from:
                    Math, English, and Science. Within each quiz, there are 3 levels. To move up to the next level, you have to earn 3 points. You can earn a point by correctly answering a question; however, if you
                    incorrectly answer, you will lose a point. There are no negative points, so don't feel too bad if you mess up! Mistakes happen! We are currently working on a way for you to try
                    again to earn your point back if you mess up. Using this level system, you can try to beat the highest level of each quiz, and you will learn quickly while doing so! Will you
                    be the first of your friends to finish level 3? Get started! </p>


                    <p> <b> Admins: </b> In order to become an admin, please contact Tutor Time support. Admins are responsible for monitoring use of teachers and classes.
                        As an admin, you should create a class and assign a teacher to it as needed, and populate the class with the current students. Teachers can add and remove students later on,
                    so don't worry about constantly updating classes! Should a teacher need to be assigned to a different class, or a teacher no longer be teaching, you are responsible for removing the
                    teacher and class from the application or updating the class teachers. </p>


                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
