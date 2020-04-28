<html>
    <head></head>
    <body>
        <h1>Hello world</h1>
        <ul>
            <?php foreach($users as $user): ?>

            <li>
                <?=$user->name?>
            </li>
            <?php endforeach; ?>
        </ul>


    </body>
</html>