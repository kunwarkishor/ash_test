<link href="../../webroot/css/cake.generic.css" rel="stylesheet" type="text/css" />
<h1 class="h1_index">Add Here</h1>
<?php
echo $this->form->create('form');
echo $this->form->input('title');
echo $this->form->input('genre');
echo $this->form->input('rating');
echo $this->form->input('format');
echo $this->form->input('length');
echo $this->form->input('created');
echo $this->form->end('Add');

?>