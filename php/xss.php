<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>XSS</title>
</head>
<body>
    <h1>Cross Site Scription</h1>
    <?php
    echo htmlspecialchars('<script>alert("babo");</script>');
    ?>
</body>
</html>