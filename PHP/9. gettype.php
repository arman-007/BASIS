<pre>
<?php

$data = array(1, 1.2, NULL, 'foo');

foreach($data as $val){
    echo gettype($val).",";
}

?>
</pre>