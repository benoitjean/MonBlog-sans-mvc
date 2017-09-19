<!doctype html>
<html lang="fr">
<head>
 		<meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Mon Blog</title>
</head>
<body>
  ...
    <div id="contenu">
      <?php foreach ($billets as $billet): ?>
        <article>
          ...
        </article>
        <hr />
      <?php endforeach; ?> 
    </div> <!-- #contenu -->
  ...
</body>
</html>