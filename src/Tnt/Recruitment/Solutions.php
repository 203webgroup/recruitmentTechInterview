<?php

namespace Tnt\Recruitment;

class Solutions
{
    public function question11()
    {
        return $this->question11a();
    }

    public function question11a()
    {
        return 'ABCDEFGHIJKLMNOPQRSTUVWXYZÅÄÖ0123456789';
    }

    public function question11b()
    {
        $az = range('A','Z');
        $ao = ['ÅÄÖ'];
        $nn = range('0', '9');
        return implode('', array_merge($az, $ao, $nn));
    }

    public function question12()
    {
        $this->question12a();
    }

    public function question12a()
    {
        for ($i = 0; $i < 10; $i++) {
            $val = rand(1, 10);
            $isEven = ($val % 2) == 0;
            $this->printValue($val, $isEven);
        }
    }

    private function printValue($val, $isEven)
    {
        echo("$val ");
        if ($isEven) {
            echo("even\n");
        } else {
            echo("odd\n");
        }
    }

    public function question13($emailAddress)
    {
        return $this->question13a($emailAddress);
    }

    public function question13a($emailAddress)
    {
        // Without !== we don't return true for accepted addresses, we return the address
        // This solution does not support addresses with non latin chars such as "уникум@из.рф" (!)
        $filtered = filter_var($emailAddress, FILTER_VALIDATE_EMAIL);
        return false !== $filtered;
    }

    function question13b($email)
    {
        $match = preg_match('/^([*+!.&#$¦\'\\%\/0-9a-z^_`{}=?~:-]+)@(([0-9a-z-]+\.)+[0-9a-z]{2,4})$/i', $email);
        return 1 === $match;
    }

    public function question14(&$values)
    {
        $this->question14a($values);
    }

    public function question14a(&$values)
    {
        usort($values, function ($a, $b) {
            return strcmp($a['name'], $b['name']);
        });
    }
}