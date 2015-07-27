<link href="../../webroot/css/cake.generic.css" rel="stylesheet" type="text/css">
<?php
//debug ($demomovie);
 echo $this->Html->link(
    'Add',
    array(
        'controller' => 'demomovies',
        'action' => 'add ',
		'full_base' => true
    )
);
?>
<h1 class="h1_index">Movies</h1>
<?php
echo'<table>';
echo '<tr><th>Name</th><th>Type</th><th>Rating</th><th>Format</th><th>Length</th><th>Created</th></tr>';
echo '<tr>';
	//echo"<td>"$this->form->"<a href=''></a></td>";
	echo '</tr>';
foreach($demomovie as $data)
{
	//pr($data);
	//echo "testing"; die;
	//echo '<td>'.$this->Form->postLink(__('Delete'), array('action' =>'delete', $data['employees']['id']), array('confirm' => 'Delete this Employee?')).'</td></tr>';
	echo '<tr>';
	echo'<td>'.$data["Demomovie"]['name'].'</td>';
	echo'<td>'.$data["Demomovie"]['Type'].'</td>';
	echo'<td>'.$data["Demomovie"]['rating'].'</td>';
	echo'<td>'.$data["Demomovie"]['format'].'</td>';
	echo'<td>'.$data["Demomovie"]['length'].'</td>';
	echo'<td>'.$data["Demomovie"]['created'].'</td><td>'.$this->Html->link('Modify',array('action'=>'edit',$data['Demomovie']['id'])).'</td>'.'<td>'.$this->Html->link('Delete',array('action'=>'delete',$data['Demomovie']['id']),array('confirm'=>'Delete this Employee?...')).'</td></tr>';
}
echo'</table>';
?>