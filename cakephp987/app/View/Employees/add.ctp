<?php
echo $this->Form->create('Post');
echo $this->Form->input('FirstName');
echo $this->Form->input('LastName');
echo $this->Form->input('Address');
echo $this->Form->input('City');
echo $this->Form->input('State');
echo $this->Form->input('Country');
echo $this->Form->input('PhoneNumber');
echo $this->Form->input('MobileNumber');
echo $this->Form->input('DOB');
echo $this->Form->end('Save');
?>
