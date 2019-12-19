<?php
namespace Rwihimba\Ageconverter;
class Age
{
    public function Age(String $name, String $dob)
    {
        $name_validation = preg_match('/[^A-Za-z]/', $name);
        if(ctype_digit($dob) && strlen((string)$dob) ==4 && !$name_validation)
        {
            $current_date = date('Y');
            $age = $current_date - $dob;
            return $name ." your age is ".  $age . " years old";
        }
       
        else
        {
            return "the name can not contain numbers or the year of birth is invalid";
        }
    }
}