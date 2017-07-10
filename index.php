<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css">

        <title>Wordcloud Generator</title>

    </head>

    <body>

        <img src="data/wcg.png" alt="Logo">

        <h1>Willkommen bei WCG</h1>
        <h2>Ihrem Word Cloud Generator</h2>

        </br>
        Bitte wählen Sie eine Datei aus, die als Grundlage für Ihre Wordcloud dient.
        </br>
        </br>
        </br>

        <form id="myform" action="../wordcloud/cloud.php" enctype="multipart/form-data" method="POST">

            <input id="tele" type="file" name="datei" value="30000" />
            <input class="btn" type="submit" value="Upload" />
        </form>
    </body>
</html>
