<?php

namespace Tnt\Recruitment;

class Solutions
{
    public function question11()
    {
        return 'ABCDEFGHIJKLMNOPQRSTUVWXYZÅÄÖ0123456789';
    }

    public function question12()
    {
        for ($i = 0; $i < 10; $i++) {
            $val = rand(1, 10);
            $isEven = ($val % 2) == 0;

            echo("$val ");
            if ($isEven) {
                echo("jämn\n");
            } else {
                echo("Udda\n");
            }
        }
    }

    public function question13($emailAddress)
    {
        // Without !== we don't return true for accepted addresses, we return the address
        // This solution does not support addresses with non latin chars such as "уникум@из.рф" (!)
        return filter_var($emailAddress, FILTER_VALIDATE_EMAIL) !== false;
    }

    public function question14(&$values)
    {
        usort($values, function ($a, $b) {
            return strcmp($a['name'], $b['name']);
        });
    }
}