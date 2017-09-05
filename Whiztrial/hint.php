<?php
// Fill up array with names
$a[]="Ankita";
$a[]="Beena";
$a[]="Caty";
$a[]="Deepti";
$a[]="Event";
$a[]="Fish";
$a[]="God";
$a[]="Hut";
$a[]="India";
$a[]="Johanna";
$a[]="Kitty";
$a[]="Linda";
$a[]="Nina";
$a[]="Kanika";
$a[]="Petunia";
$a[]="heemani";
$a[]="Roshan";
$a[]="Cindy";
$a[]="Doris";
$a[]="Eve";
$a[]="Evita";
$a[]="Sunniva";
$a[]="Tove";
$a[]="Unni";
$a[]="Violet";
$a[]="praveen";
$a[]="Elizabeth";
$a[]="Ellen";
$a[]="Wenche";
$a[]="Vicky";

// get the q parameter from URL
$q=$_REQUEST["q"];
$hint="";
// lookup all hints from array if $q is different from "" 
if ($q !== "")
  { $q=strtolower($q); $len=strlen($q);
    foreach($a as $name)
    { if (stristr($q, substr($name,0,$len)))
      { if ($hint==="")
        { $hint=$name; }
        else
        { $hint .= ", $name"; }
      }
    }
  }

// Output "no suggestion" if no hint were found
// or output the correct values 
echo $hint==="" ? "no suggestion" : $hint;
?>