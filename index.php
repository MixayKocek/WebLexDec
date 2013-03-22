<html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <link rel="stylesheet" href="tb/docs/assets/css/bootstrap.css">
      <link rel="stylesheet" href="info.css">
    </head>
    <body>
    <?php if ($_GET[id]) { ?>
        <h1>Character recognition test</h1>
        <div class="well">
        Your task is to decide whether a character you see, is a real Chinese
        character or a fake one. If you don't know the character, assume it's
        fake. It's important that you answer as quick as possible - try to do
        it under 1 second. Note that you will always see only <b>one character</b>.
        <ul>
        <li>If it's a real character, press [J] on the keyboard (not on the screen!).</li>
        <li>If it's not a real character, press [F] on the keyboard.</li>
        </ul>
        <a href="test.php?id=<?php echo $_GET[id] ?>&style=<?php echo $_GET[style] ?>&test=1" class="btn">Click here to take a sample test</a>
        </div>
    <?php } ?>
    </body>
</html>
