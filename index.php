Input Link:
<form method="post" action="Controllers/addLink.php">
    <input name="oldLink" type="url" value=""><br>
    <input type="submit" value="Sent">
</form>
<?php
require_once 'Controllers\showLinks.php';
$allLinks=showLinks();
foreach($allLinks as $link){
    echo "<a href='Controllers/redirectOnPage.php?id=".$link['id']."&href=".htmlentities($link['original_links'])."'>".htmlentities($link['shortened_links'])."</a> Followings: ".$link['counter']."<br>";
}
?>

