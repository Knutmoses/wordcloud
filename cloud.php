<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css">

        <title>Word Cloud Generator</title>

        <img src="data/wcg.png" alt="Logo">

        <h1>Willkommen bei WCG</h1>
        <h2>Ihrem Word Cloud Generator</h2>

        <script src="../wordcloud/d3-wordcloud-master/lib/d3/d3.js" charset="utf-8"></script>
        <script src="../wordcloud/d3-wordcloud-master/lib/d3/d3.layout.cloud.js"></script>
        <script src="../wordcloud/d3-wordcloud-master/d3.wordcloud.js"></script>

        <script type="text/javascript">

            var words = [

            <?php

                $pltest = get_browser(null, true);

                if(in_array("win", $pltest)) {
                  $commonpath = 'data\commonwords.php';
                } else {
                  $commonpath = 'data/commonwords.php';
                }

                require_once($commonpath);


                $path = $_FILES["datei"]["tmp_name"];

                $content = file_get_contents($path);


                $wordsList = array();
                $words = array();

                preg_match_all('/[a-zA-ZöäüÖÄÜß]{3,}/', strtolower($content), $wordsList);


                foreach($wordsList[0] as $word) {
                    if(!isCommon($word)) {
                        if(isset($words[$word])) {
                            $words[$word]++;}
                        else {
                            $words[$word] = 1;}
                    }
                }


                foreach($words as $word => $count) {
                echo "{text: '$word', size: $count},
                ";
                }
            ?>
        ];
        </script>
    </head>


    <body style="text-align: center">

        <div id='wordcloud'></div>

        <p><a href="https://github.com/wvengen/d3-wordcloud">https://github.com/wvengen/d3-wordcloud</a></p>

            <script type="text/javascript">
                d3.wordcloud()
                    .size([700, 500])
                    .fill(d3.scale.ordinal().range(["#884400", "#448800", "#888800", "#444400"]))
                    .words(words)
                    .onwordclick(function(d, i) {
                      alert(JSON.stringify(words[i+2]))
                    })
                    .start();
            </script>

    </body>
</html>
