<?php
    header('Content-Type: text/plain');

    $ipv4 = file_get_contents("https://www.cloudflare.com/ips-v4");
    $ipv6 = file_get_contents("https://www.cloudflare.com/ips-v6");
    
    $ipv4 = explode("\n", $ipv4);
    $ipv6 = explode("\n", $ipv6);

    $ipAddresses = array_merge($ipv4, $ipv6);

    echo "acl cloudflare src ";

    foreach($ipAddresses as $i) {
        if($i != "") {
            echo $i . " ";
        }
    }
    
