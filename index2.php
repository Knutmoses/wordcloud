<html xmlns="http://www.w3.org/1999/xhtml" xml.lang="de" lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css">

        <script src="../wordcloud/d3-wordcloud-master/lib/d3/d3.js" charset="utf-8"></script>
        <script src="../wordcloud/d3-wordcloud-master/lib/d3/d3.layout.cloud.js"></script>
        <script src="../wordcloud/d3-wordcloud-master/d3.wordcloud.js"></script>

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

        <div id ="cloud"></div>



            <input id="tele" type="file" name="datei" value="30000" />
            <button onclick="getCloud();">Starten</button>
            <script type="text/javascript" src="script.js"></script>

    </body>
</html>
