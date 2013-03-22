<html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <script src="jquery.min.js"></script>
      <?php if($_GET[test] == 1) { ?>
      <script language="JavaScript" src="test.js"></script>
      <?php } else { ?>
        <?php if($_GET[style] == "simp") { ?>
          <script language="JavaScript" src="simp.js"></script>
        <?php } else if($_GET[style] == "trad") { ?>
          <script language="JavaScript" src="trad.js"></script>
        <?php } ?>
      <?php } ?>
      <script language="JavaScript" src="wld.js"></script>
      <link rel="stylesheet" href="wld.css" type="text/css">
    </head>
    <body>
        <div class="mid">
            <div class="word"></div>
          <div class="keys">
              <h2 class="f">non-char.<br />[F]</h2>
                  <h2 class="j">char.<br />[J]</h2>
          </div>
        </div>
        <form id="logform" action="reg.php" method="POST">
          <input type="hidden" name="id" value="<?php echo htmlentities($_GET[id]) ?>">
          <input type="hidden" name="style" value="<?php echo htmlentities($_GET[style]) ?>">
          <input type="hidden" name="test" value="<?php echo htmlentities($_GET[test]) ?>">
          <textarea name="log"></textarea>
        </form>
    </body>
</html>
