<?php

require 'dbconfig.php';

class User {

    function checkUser($uid, $oauth_provider, $username,$email,$twitter_otoken,$twitter_otoken_secret) 
	{
        $query = mysql_query("SELECT * FROM `twitteruser` WHERE oauth_id = '$uid' and login_as = '$oauth_provider'") or die(mysql_error());
        $result = mysql_fetch_array($query);
        if (!empty($result)) {
			echo "Not Empty";
            # User is already present
        } else {
            #user not present. Insert a new Record
            $query = mysql_query("INSERT INTO `twitteruser` (login_as, oauth_id, username,email) VALUES ('$oauth_provider', $uid, '$username','$email')") or die(mysql_error());
            $query = mysql_query("SELECT * FROM `twitteruser` WHERE oauth_id = '$uid' and login_as = '$oauth_provider'");
            $result = mysql_fetch_array($query);
            return $result;
        }
        return $result;
    }

    

}

?>
