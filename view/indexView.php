<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

</head>
<body>
<h1>Get a cookie from the jar</h1>
<form action="?action=draw" method="POST">
    <label>Trys:</label>
    <input type="text" name="trys" value="1" />
    <br/>
    <label>Options:</label>
    <input type="text" name="options" value="10" />
    <br/>
    <input type="submit" value="send">
    <?php if(count($DATA)) : ?>
        <h2> Your luck is:</h2>
        <ul>
            <?php foreach ($DATA["lucks"] as $luck): ?>
            <li><?php echo $luck ?></li>
            <?php endforeach; ?>
        </ul>
        <h2> Cookies left in the jar: <?php echo $DATA["jar"]->cookiesInside() ?></h2>
    <?php endif; ?>
</form>
</body>
</html>
