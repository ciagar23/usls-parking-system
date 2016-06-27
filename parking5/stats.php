<?php

$gate1 =600;
$gate2 = 124;
$gate6 = 343;

$total = $gate1 + $gate2 + $gate6;

$percent1 = ($gate1 * 100)/$total;
$percent2 = ($gate2 * 100)/$total;
$percent6 = ($gate6 * 100)/$total;


?>



<table width="100%">
<tr>
<td bgcolor="red" width="<?php echo $percent1;?>%">
<td>Gate 1: <?php echo round($percent1).' %';?>
<tr>
</table>
<br>
<table width="100%">
<tr>
<td bgcolor="red" width="<?php echo $percent2;?>%">Gate 1: <?php echo round($percent2).' %';?>
<td>&nbsp;
<tr>
</table>
<br>
<table width="100%">
<tr>
<td bgcolor="red" width="<?php echo $percent6;?>%">Gate 1: <?php echo round($percent6).' %';?>
<td>&nbsp;
<tr>
</table>
<br>
