<?php
class EmployeesController extends AppController
{
	public $helpers=array('Html','Form');
	public function index()
	{
		//$p=$this->employee->find('all');
        $this->set('employee',$this->Employee->find('all'));
       // $this->set('employee',$p);
	}
	public function add()
	{
	   if($this->request->is('Post')) //employee is model's class name 
	   //if($this->request->data)
	   {
		 // $p = $this->Employee->create();
		 $this->Employee->create();
		 
		  // pr($p); die;
		   if($this->Employee->save($this->request->data))
		   {
			   $this->Session->setFlash(__('Your data is saved.'));
			   return $this->redirect(array('action'=>'index'));
		   }
		   $this->Session->setFlash(__('Unable to save..'));
	   }	
	}
}
?>