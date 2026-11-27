<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            min-height: 100dvh;
            background-color: #1B2845;       
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: antiquewhite;
        }
        ul li {
            float: left;
        }
        ul li a {
            display: block;
            color: #1B2845;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        ul li a:hover {
            background-color: #4e80ec;
        }
    </style>
</head>
<body>
    <ul>
        <form action="/" method=GET>
            <li> <a href="#logout"> Logout</a></li>
        </form> <!-- fix this w/ JS-->
            <li> <a href="#Profile"> My Profile</a></li>
            <li> <a href="Appointments"> My Appointments</a></li>
    </ul>
    <div class="container">
        <h1> 
    </div>
</body>
</html>