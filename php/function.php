<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <h1>function</h1>
    <?php
    $str = "Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Maiores quam ad omnis mollitia sit, rem accusamus et iure eius deserunt! Distinctio quisquam cupiditate eum deleniti laboriosam, illo eligendi. Exercitationem, vero?";
    echo $str;
    ?>
    <h2>strlen()</h2>
    <?php
    echo strlen($str);
    ?>
    <h2>nl2br</h2>
    <?php
    echo nl2br($str);
    ?>
</body>

</html>