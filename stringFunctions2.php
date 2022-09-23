<?php
        $str="Engr. Farman Ali Jutt";
        echo strlen($str)."<br>";//strlen() is use to find length of string.


        echo strpos($str,"m")."<br>";//strlen() is use to find position of any charecter in the string


        echo str_word_count($str)."<br>";//strlen() is use to find total no of words in the string

        // $newArray=str_word_count($str,2)."<br>";//strlen() is use to find total no of words in the string
        // echo "<pre>";
        // print_r($newArray);
        // echo "</pre>";

         $str2="farman ali jutt farman ali jutt farman is farman goryah engineering virtaul farman";
        echo substr_count($str2,"farman")."<br>";//this fucntion substr_count() is use to search how many time given word or substring is present in main string.if it return 0 then it main sub_string is not present in the string.
        echo strpos($str2,"jutt")."<br>";//strpost() function is use to search any word or charecter from string it return the positon no in the string  and it search from the starting of string
        echo strrpos($str2,"jutt")."<br>";//strrpost() function is use to search any word or charecter from string it return the positon no in the string  and it search from the end of string
        echo stripos($str2,"JUTT")."<br>";//is works like strpose() function but diff is it is case-insensitive function
        echo strripos($str2,"JUTT");//is works like strrpose() function but diff is it is case-insensitive function
?>