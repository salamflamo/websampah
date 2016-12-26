<!DOCTYPE html>
<html>
    <head>
        <title>Login Admin</title>
        <style>
            /* Bordered form */
            form {
                border: 3px solid #f1f1f1;
            }

            /* Full-width inputs */
            input[type=text], input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            /* Set a style for all buttons */
            button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }

            /* Extra style for the cancel button (red) */
            .cancelbtn {
                width: auto;
                padding: 10px 18px;
                background-color: #f44336;
            }

            /* Center the avatar image inside this container */
            .imgcontainer {
                text-align: center;
                margin: 24px 0 12px 0;
            }

            /* Avatar image */
            img.avatar {
                width: 40%;
                border-radius: 50%;
                width: 10%;
                height: 10%;
            }

            /* Add padding to containers */
            .container {
                padding: 16px;
                width: 30%;
                margin: 0 auto;
            }

            /* The "Forgot password" text */
            span.psw {
                float: right;
                padding-top: 16px;
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
                span.psw {
                    display: block;
                    float: none;
                }
                .cancelbtn {
                    width: 100%;
                }
            }
        </style>
    </head>
    <body>
    <form action="/verif" method="post">
        <div class="imgcontainer">
            <img src="/vendor/images/img_avatar2.png" alt="Avatar" class="avatar">
        </div>
        <div align="center" class="container">
            <h3>Login Admin</h3>
        </div>
        <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="Email" name="email" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Password" name="password" required>
            {{csrf_field()}}
            <input type="submit" name="submit" value="Login">
            <input type="checkbox" checked="checked"> Remember me
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
    </body>
</html>