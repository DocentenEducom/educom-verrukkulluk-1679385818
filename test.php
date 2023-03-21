<?php

define("USER", "root");
define("PASSWORD", null);
define("DATABASE", "verrukkulluk");
define("HOST", "localhost");


$q = mysqli_connect(HOST,                                          
                    USER, 
                    PASSWORD,
                    DATABASE ) or die("nope!");


$sql = "select * from test";

$result = mysqli_query($q, $sql);
$data = mysqli_fetch_array($result, MYSQLI_ASSOC);

var_dump($data);