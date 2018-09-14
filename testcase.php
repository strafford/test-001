<?php

require_once __DIR__ . '/smarty-config.php';

$smarty->configLoad('eval:testvar = "FirstLine\\\\nSecondLine"');

$smarty->display(__FILE__);

__halt_compiler()
?><html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
  <script type="text/javascript">
    alert("{#testvar#}");
  </script>
</body>
</html>
