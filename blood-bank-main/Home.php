<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
session_start();
$_SESSION["tab"] = "Home";

if ($_SESSION["login"] != 1) {
    echo '<h2 style="color: red; text-align: center;">Authentication Error!</h2>';
} else {
    include_once('header.php');

    echo '<div style="text-align: center;">';

    echo "<h2>Welcome to our Blood Bank - Where Hope Flows Through Generosity.</h2><br>";

    echo "<p>Step into a sanctuary of compassion and care, where the beating heart of humanity resides. Here, amidst the hustle and bustle of life, we stand as a beacon of hope, a haven for the weary and the wounded.</p>";
    echo "<p>In our halls, the echo of countless lifesaving miracles reverberates, each drop of blood a testament to the indomitable spirit of giving. It's not merely about blood, but about the profound connection between donor and recipient, the unspoken bond that transcends barriers and brings communities together.</p>";
    echo "<p>With every step you take through our doors, you become a part of something greater than yourself - a network of heroes, united by the singular purpose of saving lives. Here, in this sacred space, every act of generosity is a symphony of humanity, each donor a conductor orchestrating the melody of hope.</p>";
    echo "<p>Welcome to our Blood Bank, where we believe that through the simple act of giving, we can transform despair into hope, and darkness into light. Together, let us embark on a journey of compassion and kindness, where every drop of blood becomes a beacon of hope for those in need.</p>";

    echo '</div>';

    echo '<div style="float: left; margin-right: 20px;">';
    include_once('checkstock.php');
    echo '</div>';

    echo '<div style="float: right;">';
    echo '<img src="res\images\Bloodtable.jpg" width="400" height="400" title="Compatibility of Blood groups" alt="Blood Table" />';
    echo '</div>';

    include_once('footer.php');
}
?>
