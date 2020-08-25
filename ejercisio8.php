<?php
$foo=array(
    0 => array(
            0 => 'a1',
            1 => 'a2',
            2 => 'a3'
        ),
 
    1 => array(
            0 => 'a1',
            1 => 'a2',
            2 => 'a3'
        ),
 
);
 
$foo2 = array(
    0 => array(
       'a' => 'a1',
       'b' => 'a2',
       'c' => 'a3' 
    ),
    1 => array(
       'a' => 'b1',
       'b' => 'b2',
       'c' => 'b3' 
    ),
);
echo "<pre>";
print_r($foo);
echo "</pre>";
 
$elements=count($foo, COUNT_RECURSIVE);
$files=count($foo);
$elementsFila=($elements-$files)/$files;
 
echo "<br />elements ".$elements.", ";
echo "files ".$files.", ";
echo "elementsFila ".$elementsFila."<br /><br />";
 
echo "Array tal cual<br /><br />";
 
echo "<table border='0' cellspacing='3' cellpadding='0'>";
for($f=0;$f<$files;$f++){
echo "<tr>";
    for($e=0;$e<$elementsFila;$e++){
        echo "<td>".$foo[$f][$e]."</td>";
    }
echo "</tr>";
    }
echo  "</table>";
echo  "<br /><br />";
echo "Array transpuesta<br /><br />";
echo "<table border='0' cellspacing='3' cellpadding='0'>";
for($e=0;$e<$elementsFila;$e++){
        echo "<tr>";
    for($f=0;$f<$files;$f++){
            echo "<td>".$foo[$f][$e]."</td>";
    }
        echo "</tr>";
}
echo  "</table>";

?>