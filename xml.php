<?php

$str = <<<XML
<?xml version="1.0" encoding="UTF-8" ?>
<cbm>
    <title>Schneeammer</title>
    <header>Schneeammer</header>
    <summary>Schneeammer</summary>
    <content>
        <![CDATA[
            <ul>
                <li>Gesichtet am 15.03.2023 auf Wangerooge.</li>
            </ul>
        ]]>
    </content>
    <images>
        <img title="Schneeammer">schneeammer.png</img>
    </images>
</cbm>
XML;

$xml = simplexml_load_string($str, null, LIBXML_NOCDATA | LIBXML_NOBLANKS);
$con = json_encode($xml);
$newArr = json_decode($con, true);

echo '<pre>'.print_r($newArr, true).'</pre>';

?>