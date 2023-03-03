<?php 

    function check_name ($name) {
    $parttern = "/^([a-vxyỳọáầảấờễàạằệếýộậốũứĩõúữịỗìềểẩớặòùồợãụủíỹắẫựỉỏừỷởóéửỵẳẹèẽổẵẻỡơôưăêâđ]+)((\s{1}[a-vxyỳọáầảấờễàạằệếýộậốũứĩõúữịỗìềểẩớặòùồợãụủíỹắẫựỉỏừỷởóéửỵẳẹèẽổẵẻỡơôưăêâđ]+){1,})+$/";
    if (preg_match($parttern, mb_strtolower($name)))
        return true;
    }

    function check_phoneNumber ($phoneNumber) {
    $parttern = '/^[0-9]{10}+$/';
    if (preg_match($parttern, $phoneNumber))
        return true;
    }

    function check_email($email) {
    $parttern = "/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
    if (preg_match($parttern, $email))
        return true;
    
    }

?>