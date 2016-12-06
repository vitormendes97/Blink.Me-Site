<?php
if(!isset($campos) or !isset($titulo) or !is_array($campos)){
	exit('As variaveis $campos e $titulo são requeridas');
}
?>

<table width="500" border="0" style="font-family:Arial, Helvetica, sans-serif">
 <tr>
  <th scope="col" colspan="2" style="padding:10px"><?php echo $titulo; ?></th>
 </tr>
<?php
	$x=0;
	foreach($campos as $c => $v){
		if($v==''){ continue; }
?>
 <tr <?php echo $x%2!=0 ? '' : 'style="background: #eee;"'; ?> >
  <th scope="row" align="left" style="text-align: right;padding-right: 10px;"><?php echo $c; ?>:</th>
  <td><?php echo $v; ?></td>
 </tr>
<?php
	$x++;
	}
?>
</table>
