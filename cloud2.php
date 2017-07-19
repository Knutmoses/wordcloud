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


        <div id='wordcloud'></div>

        <p><a href="https://github.com/wvengen/d3-wordcloud">https://github.com/wvengen/d3-wordcloud</a></p>

            <script type="text/javascript">
                d3.wordcloud()
                    .size([700, 500])
                    .fill(d3.scale.ordinal().range(["#884400", "#448800", "#888800", "#444400"]))
                    .words(words)
                    .onwordclick(function(d, i) {
                      alert(JSON.stringify(words[i]))
                    })
                    .start();
            </script>
