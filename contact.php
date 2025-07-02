<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Contact Me</title>
        <style>
            textarea:focus {outline: 1px solid blue;}
            input:focus {outline: 1px solid blue;}
            input[type=text],input[type=email], textarea, select, button{padding: 10px; border-radius: 10px; margin: 5px; border:1px solid black;}
            button:hover {background-color: rgb(209,189,164); cursor:pointer;}
        </style>
    </head>

    <body>

        <form action="example.html" method="post">
            <label for="fullname">Full Name: </label>
            <br>
            <input type="text" id="fullname" name="fullname" placeholder="Full Name" value="">
            <br><br>

            <label for="email">Email: </label>
            <br>
            <input type="email" id="email" name="email" placeholder="name@example.com" value="">
            <br><br>

            <label for="topic">Mom: </label>
            <br>
            <input type="text" id="topic" name="topic" placeholder="Dear Mom" value="">
            <br><br>

            <label for="message">Write something in here:</label>
            <br>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Write a message..."></textarea>
            <br><br>

            <button type="submit" value="submit">Send Data</button>

        </form>

    </body>

</html>