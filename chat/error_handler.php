<?php

  set_error_handler('error hanler', E_ALL);

  function error_handler($errno, $errstring, $errfile, $errline)
  {
      if ( ob_get_length() )
          ob_clean();

      $errmsg = 'ErrNo: ' . $errno . chr(10) .
              'Text: ' . $errstring . chr(10) .
              'Location: ' . $errfile . ', Line ' . $errline;
      echo $errmsg;
      exit;
      
  }

?>
