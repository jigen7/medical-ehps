<?php
if (@$_REQUEST['ajax']) {
    // connect to local database 'test' on localhost
    $link = mysql_connect('localhost', 'root', '');
    if ($link == false)
    	trigger_error('Connect failed - ' . mysql_error(), E_USER_ERROR);

    $connected = mysql_select_db('healthprofile', $link);
    
    if ($connected) {
	$cat =  $_REQUEST['category'];
        $results = mysql_query('select * from healthprofile.select_chain where label="' . strtolower(mysql_real_escape_string(strip_tags($_REQUEST['category2']))) . '"');
        
        $json = array();
        
        while (is_resource($results) && $row = mysql_fetch_object($results)) {
            //$json[] = '{"id" : "' . $row->id . '", "label" : "' . $row->label . '"}';
            $json[] = '"' . $row->field . '"';
        }
        
        echo '[' . implode(',', $json) . ']';
        die(); // filthy exit, but does fine for our example.
    } else {
        user_error("Failed to select the database");
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Select Chain</title>
    <style type="text/css" media="screen">
    <!--
      BODY { margin: 10px; padding: 0; font: 1em "Trebuchet MS", verdana, arial, sans-serif; }
      BODY { font-size: 100%; }
      H1 { margin-bottom: 2px; font-family: Garamond, "Times New Roman", Times, Serif;}
      DIV.selHolder { float: left; border: 3px solid #ccc; margin: 10px; padding: 5px;}
      TEXTAREA { width: 80%;}
      FIELDSET { border: 1px solid #ccc; padding: 1em; margin: 0; }
      LEGEND { color: #ccc; font-size: 120%; }
      INPUT, TEXTAREA { font-family: Arial, verdana; font-size: 125%; padding: 7px; border: 1px solid #999; }
      LABEL { display: block; margin-top: 10px; } 
      IMG { margin: 5px; }
      SELECT { margin: 10px; width: 200px; }
    -->
    </style>

    <script src="/js/jquery.js" type="text/javascript"></script>
    <script src="select-chain.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
    <!--
    $(function () {
        var cat = $('#categorySelect');
        var el = $('#elementSelect');
        var attr = $('#attributeSelect');
        
        el.selectChain({
            target: attr,
            url: 'select-chain.php',
            data: { ajax: true, anotherval: "anotherAction" }            
        });        

        // note that we're assigning in reverse order
        // to allow the chaining change trigger to work
        cat.selectChain({
            target: el,
            url: 'select-chain.php',
            data: { ajax: true }
        }).trigger('change');

    });
    //-->
    </script>
  </head>
  <body id="page">
    <div id="doc">
        <h1>Select Chain</h1>
        <div class="selHolder">
            <h2>Element Category</h2>
            <select id="categorySelect" name="category" size="5">
                <option>Forms</option>
                <option>Scripts</option>
            </select>
        </div>
        <div class="selHolder">
            <h2>Element</h2>
            <select id="elementSelect" name="category" size="5">
                <option>[none selected]</option>
            </select>
        </div>
        <div class="selHolder">
            <h2>Attributes</h2>
            <select id="attributeSelect" name="category" size="5">
                <option>[none selected]</option>
            </select>
        </div>
    </div>
  </body>
</html>





