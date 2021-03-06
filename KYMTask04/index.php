<html>
    <head>
        <title>Мой альбом</title>
        <meta charset = "utf-8" />
        <link rel = "stylesheet" href = "styles/main.css" />
        <style>
            div.thumbnails {
                /*border: solid black thin;*/
                width: 150px;
                float: left;
            }
            div.thumbnails img {
                margin: 5px;
                border-radius: 50%;
                display: block;
                width: 130px;
                border: solid white thin;
            }
            div.large-photo {
                float: left;
            }
            div.large-photo img {
                width: 400px;
                margin-left: 10px;
            }
            div.thumbnails img:hover{
                border: solid red thin;
                cursor: pointer;
            }
            div.thumbnails img.selected{
                border: solid blue thin;
            }
        </style>
        <script src = "scripts/jquery-3.6.0.js"></script>
        <script>
            function showLarge(thumb){
                console.log(thumb);
                var pic_name = thumb.src;
                console.log(pic_name);
                var splitted = pic_name.split(".");
                splitted.pop();
                var large_name = splitted.join(".") + "-large.jpg";

                //--jquery--
                $("#large_photo").attr("src", large_name);
                $("div.thumbnails img").removeClass("selected");
                $(thumb).addClass("selected");
                //--vanilla js--
                // document.getElementById("large_photo").src = large_name;
                // for(element of document.getElementsByClassName("thumbnails")[0].children){
                //     element.classList.remove("selected");
                // };
                // thumb.classList.add("selected");
            }

        </script>
    </head>
    <body>
        <h1>Фотоальбом</h1>
        <div class = "thumbnails">
            <?php
                $files = scandir(__DIR__."\images");
                $classname = "selected";
                foreach($files as $file){
                    if(strpos($file, "large") === FALSE and strlen($file) > 3){
                        echo("<img src='images/$file' onclick='showLarge(this);' class='$classname' />");
                        $classname = "";
                    }
                }
            ?>
        </div>
        <div class = "large-photo">
            <img id = "large_photo" />
        </div>
    </body>
</html>