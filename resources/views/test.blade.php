<!DOCTYPE html>

<html lang="en">
    <head>

        <meta charset="UTF-8">
        <title>Test html</title>
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

        <style>

            body{
                font-family: 'Pacifico', cursive;
            }

            .highlight-1, .highlight-2{
                color: blue;
            }

            #third .highlight-2
            {
                color: red;
            }

            .highlight-1{
                font-style: italic;
            }

            .beautifull_font{
                font-family: Calibri;
            }

            #first
            {
                opacity: 0.3;
            }

            span{
                font-size: 25px;
            }

            #second {
                margin: 5px 25px 50px 75px;
                padding: 5px 25px 50px 75px;
                background-color: greenyellow;
                border:solid 5px hotpink;
                border-radius: 10px 15px 30px 50px;
            }

            #free {
                position: absolute;
                opacity: 0.5;
            }

        </style>

    </head>

    <body>


        <span>Aš kitoks</span>
        <div id="first">Labas Rytas <span class="highlight-1 beautifull_font">Lietuva!</span></div>
        <div id="second">Labas vakaras <span class="highlight-2 beautifull_font">Vilniau!</span></div>
        <img id="free" src="https://image.freepik.com/free-icon/smile_318-49788.jpg">
        <div id="third">Labas Diena <span class="highlight-2 beautifull_font">Kaunas!</span></div>



    </body>

</html>

