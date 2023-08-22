<!doctype html>
<html lang="en">

<head>
  <title>News||App</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <?php
    $url = 'https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=c0b4db7fd8394e1bbd1ac6dfbefa0e49';
    $response = file_get_contents($url);
    $NewsData = json_decode($response);

    ?>
    <div class="jumbotron">
    <h1>Google News API || PHP </h1>
    </div>

    <div class="container-fluid">
        <?php
          foreach($NewsData->articles as $News){
        ?>
        <div class="row NewsGrid">
            <div class="col-md-3">
                <img src="<?php $News->urlToImage ?>" alt="News thumbnail" class="rounded">
            </div>
            <div class="col-md-9">
                <h2>Title: <?php echo $News->title ?> </h2>
                <h5>Description: <?php echo $News->description ?></h5>
                <p>Content: <?php echo $News->content ?></p>
                <h6>Aurther: <?php echo $News->author ?></>
                <h6>Published: <?php echo $News->publishedAt ?></>
            </div>
        </div>
        <?php
          }
        ?>
    </div>
    
    
    

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>