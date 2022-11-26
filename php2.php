<?php
$xml = new DOMDocument;
$xml-> load("xml3.xml");

if ($xml->validate()){

    echo("its a valid xml document");

}
    else{

    
    echo("its invalid document");
    }
// xml validation 