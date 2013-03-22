<?php
  $result_dir = "/tmp";
  $filen = str_replace('/', '', $_POST[id]);
  if ($_POST[test] == 1) {
    $filen = "${filen}_test";
  }
  if(file_exists("$result_dir/$filen")) {
    exit("You cannot take the test again");
  }
  $fh = fopen("$result_dir/$filen" , "w");
  fwrite($fh, $_POST[log]);
  fclose($fh);
?>
<html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <link rel="stylesheet" href="tb/docs/assets/css/bootstrap.css">
      <link rel="stylesheet" href="info.css">
    </head>
    <body>
    <?php if ($_POST[id]) { ?>
    <?php if ($_POST[test]) { ?>
        <h1>Character recognition test</h1>
        <div class="well">
        That was a warm-up. Now proceed to the actual test.
        <p>
        <a href="test.php?id=<?php echo $_POST[id] ?>&style=<?php echo $_POST[style] ?>" class="btn">Click here to continue</a>
        </div>
    <?php } else { ?>
        <h1>Character recognition test</h1>
        <div class="well">
        Thank you for taking the test!
        </div>
    <?php } ?>
    <?php } ?>
    </body>
</html>
