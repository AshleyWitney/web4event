
<br />
<?php
if(isset($actu)) {
echo $actu->act_id;
echo(" -- ");
echo $actu->act_titre;
}
else {echo "<br />";
echo "pas d’actualité !";
}
?>


