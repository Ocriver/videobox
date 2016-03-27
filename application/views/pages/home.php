<?php

$trimmedBaseUrl = parse_url(base_url());

var_dump($trimmedBaseUrl['host']);
?>