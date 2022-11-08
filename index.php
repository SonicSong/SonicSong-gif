<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sonic Song</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="avatar.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="main">
        <div class="text">
            <p>This is just my collection of gifs that I've collected over the years.</p>
            <p>And yes I'm aware that some of them are inappropriate</p>
            <a href="https://sonicsong.me/">Homepage</a>
        </div>
        <hr>
        <div class="images">
            <?php
            $fileList = glob('gif/*');
            foreach($fileList as $gif_item){
                echo "<a href='$gif_item' class='imagbt'><img src='$gif_item' class='imagfu' alt='$gif_item'></a>";
            }
            ?>
            <!-- I'm doing it just for fun so don't complain -->
        </div>
    </div>
    <div class="footer">
        <p>Made with pure PHP and probably some fun.<br>
            © Sonic Song 2022. Source code available on
            <a href="https://github.com/SonicSong/">Github</a>
        </p>
    </div>
</body>
</html>

<!-- Yes. I was lazy with doing this... Same goes for CSS -->