<link href="file:///C|/wamp/www/cakephp987/app/webroot/css/cake.generic.css" rel="stylesheet" type="text/css">
<h1 class="h1_index">Editing The Data</h1>
<?php
echo $this->Form->create('post');
echo $this->form->input('name');
echo $this->form->input('Type');
echo $this->form->input('rating');
echo $this->form->input('format');
echo $this->form->input('length');
echo $this->form->input('Created');
echo $this->form->end('Modify');
?>