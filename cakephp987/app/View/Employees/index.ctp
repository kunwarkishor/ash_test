<h1>Employee Details</h1>
<?php
echo $this->Html->link('Add Employee',array('action'=>'add')); 
?>
<table>
<tr><th>S.no</th><th>First Name</th><th>Last Name</th><th>Address</th><th>City</th><th>State</th><th>Country</th><th>Phone Number</th><th>Mobile Number</th><th>Date Of Birth</th><th>Action</th></tr>
<?php foreach($employee as $data){ pr($data); ?>
<tr>
	<td><?php echo $data['Employee']['ID']; ?></td>
    <td><?php echo $data['Employee']['FirstName']; ?></td>
    <td><?php echo $data['Employee']['LastName']; ?></td>
    <td><?php echo $data['Employee']['Address']; ?></td>
    <td><?php echo $data['Employee']['City']; ?></td>
    <td><?php echo $data['Employee']['State']; ?></td>
    <td><?php echo $data['Employee']['Country']; ?></td>
    <td><?php echo $data['Employee']['PhoneNumber']; ?></td>
    <td><?php echo $data['Employee']['MobileNumber']; ?></td>
    <td><?php echo $data['Employee']['DOB']; ?></td>
    <td><a href="">Edit</a> &nbsp;\&nbsp; <a href="">Delete</a></td>
</tr>
  <?php }?>
</table>