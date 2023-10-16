<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>My Portfolio</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">My Portfolio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <h1 class="text-center mt-5">My Portfolio</h1>
      <div class="row mt-5">
        <?php
        $portfolio_items = [
          [
            'title' => 'Project 1',
            'image' => 'https://picsum.photos/400/300',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum hendrerit semper. Duis euismod bibendum metus, at pellentesque leo iaculis eget.',
          ],
          [
            'title' => 'Project 2',
            'image' => 'https://picsum.photos/400/300',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum hendrerit semper. Duis euismod bibendum metus, at pellentesque leo iaculis eget.',
          ],
          [
            'title' => 'Project 3',
            'image' => 'https://picsum.photos/400/300',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum hendrerit semper. Duis euismod bibendum metus, at pellentesque leo iaculis eget.',
          ],
        ];
        foreach ($portfolio_items as $item) {
        ?>
        <div class="col-md-4 mb-5">
          <div class="card">
            <img src="<?php echo $item['image']; ?>" class="card-img-top" alt="<?php echo $item['title']; ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo $item['title']; ?></h5>
              <p class="card-text"><?php echo $item['description']; ?></p>
            </div>
          </div>
        </div>
        <?php
        }
        ?>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
