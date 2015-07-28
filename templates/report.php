<br /><br />

<table class="table">
<tr><th>Name</th><th>L1</th><th>L2</th><th>R1</th><th>R2</th></tr>
<tbody>
<?php foreach($all_users as $uid => $name) { if(!$name) ?>
<tr><td><?php echo $name ?></td>
	<?php cell($uid,'L1'); ?>
	<?php cell($uid,'L2'); ?>
	<?php cell($uid,'R1'); ?>
	<?php cell($uid,'R2'); ?>
</tr>
<?php } ?>
</tbody>
</table>

<?php 
function cell($uid, $q) {
	global $data;
	print '<td class="';
	if(($q == 'L1') 
		and ($data[$uid.'_L1']['total'] > $data[$uid.'_L2']['total']) and ($data[$uid.'_L1']['total'] > $data[$uid.'_R1']['total']) and ($data[$uid.'_L1']['total'] > $data[$uid.'_R2']['total'])) {
		print 'top';
	}
	if(($q == 'L2') 
		and ($data[$uid.'_L2']['total'] > $data[$uid.'_L1']['total']) and ($data[$uid.'_L2']['total'] > $data[$uid.'_R1']['total']) and ($data[$uid.'_L2']['total'] > $data[$uid.'_R2']['total'])) {
		print 'top';
	}
	if(($q == 'R1') 
		and ($data[$uid.'_R1']['total'] > $data[$uid.'_L1']['total']) and ($data[$uid.'_R1']['total'] > $data[$uid.'_L2']['total']) and ($data[$uid.'_R1']['total'] > $data[$uid.'_R2']['total'])) {
		print 'top';
	}
	if(($q == 'R2') 
		and ($data[$uid.'_R2']['total'] > $data[$uid.'_L1']['total']) and ($data[$uid.'_R2']['total'] > $data[$uid.'_R1']['total']) and ($data[$uid.'_R2']['total'] > $data[$uid.'_L2']['total'])) {
		print 'top';
	}
	print "\">";
	print $data[$uid.'_'.$q]['total'];
	print "</td>";
}