<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>ระบุคําค้นหา</p>
                <div class="form-group">
                    <input type="text" class="form-control">
                    <br>
                    <input class="btn btn-primary" type="submit" name="submit">
                </div>
            </div>
        </div>
        <div class="row">
        <?php
            $url = "ezquiz.json";
            $response = "file_get_contents($url)";
            $result = "json_decode($response)";
            for($i=0;$i<sizeof($result->tracks->items);$i++){
                echo "<div class='col-4'>";
                echo "<div class='card'>";
                echo "<img class='card-img' src='".$result->tracks->items[$i]->album->images[0]."'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>".$result->tracks->items[$i]->album->name."</h5>";
                echo "<p>Artist :".$result->tracks->items[$i]->album->artists[0]->name."</p>";
                echo "<p>Release date :".$result->tracks->items[$i]->album->release_date."</p>";
                echo "<p>Avaliable :".sizeof($result->tracks->items[$i]->album->available_markets)."</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        ?>
        </div>
    </div>
</body>
</html>