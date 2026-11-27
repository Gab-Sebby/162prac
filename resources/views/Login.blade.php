<!DOCTYPE html>
<html>
    <html lang="en">
    <head>
        <title>Login</title>
        <!-- Note that this is html, but everything in style isn't -->
        <meta 
            charset="UTF-8"
            name="viewport" content="width=device-width, initial-scale=1.0"
            http-equiv="X-UA-Compatible" content="ie=edge">
        <style> 
        /* Transfer this to a separate CSS file; Note that the <style> tag isn't html */
            body {
                margin: 0
            }
            button {
                background-color:#3E5C76;
                color:aliceblue;
                font-family: Cambria, serif;
                border-color: #0D1321;
            }
            .container {
                display: flex;
                min-height: 100dvh;
                background-color: #1B2845;
                justify-content: center; 
                align-items: center;         
            }
            .container > .box {
                min-height: 35dvh;
                min-width: 80dvh;
                padding: 1em;
                font-family: Cambria, serif;
                background-color: antiquewhite;
                color: #1B2845;
                border-radius: 5dvh;
                justify-items: center; 
                align-items: center; 
                text-align: center;
            }
        </style>
    </head>
    <body>
       <div class="container">
            <div class="box">
                <h1>Log in</h1>
                    <form action="/home" method=POST> <!-- PUT THE FORM STYLE IN. THE. HEAD!!! -->
                        @csrf
                        <text>Username:</text> <!-- fix the formatting of these ones -->
                            <input name="usern" type="text"> <br>
                        <text>Password:</text>
                                <input name= "passw" type="password"> <br>
                        <button> Log in </button>
                    </form>
                    <form action="/register" method=GET> <!-- fix this button it's not working -->
                        <text> or create an account </text> <button> here </button>
                    </form>
            </div>
        </div>
    </body>
    </html>
</html>