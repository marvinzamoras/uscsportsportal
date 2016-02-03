<tr>
<table class = "table-striped-dflt">
<col>
<colgroup span="1"></colgroup>
<colgroup span="1"></colgroup>
<tr class="tr-head">
<td rowspan="1"></td>
<?php foreach($results['category'] as $c):?>
<th colspan="1" scope="colgroup"><?php echo $c->cat_name;?></th>
<?php endforeach;?>
</tr>
<tr>
<?php for($ctr=0; $ctr<count($results['games']);$ctr++){

echo "<tr><th scope='row'>".$results['games'][$ctr]->game_name."</th>";
 
 for($count=0;$count<count($results['team']);$count++){
 	for($cnt=0;$cnt<count($results['category']);){
 	if($results['team'][$count]->game_cat==$results['games'][$ctr]->game_id && $results['team'][$count]->team_cat==$results['category'][$cnt]->cat_id)
 	echo "<td>".$results['team'][$count]->team_name."</td>";
 	$cnt++;
 	}
 }

echo "</tr>";
}
;?>

</table>

<tr>
<th></th>
<?php foreach ($results['category'] as $c): ?>
<?php echo "<th>".$c->cat_name."</th>"; ?>
<?php endforeach;?>
</tr>