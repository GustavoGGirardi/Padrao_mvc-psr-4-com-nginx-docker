<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    
<body>
    <h1>Este é o TOPO</h1>
    <a href="<?php echo BASE_URL; ?>">Home</a>
    <a href="<?php echo BASE_URL; ?>galeria">Galeria</a>
    <hr>
    <?php $this->loadViewInTemplate($viewName, $viewData); ?>
</body>
</html>