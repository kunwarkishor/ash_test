<?php  
    class DemomoviesController extends AppController 
	{ 
       //public $components = array('Session'); 
       public function index()  
       {  
          $movies = $this->Demomovie->find('all');  
          $this->set('demomovie', $movies);  
       }  
      
       public function add()  
       {
		   if($this->request->is('post'))
		   {
          if (!empty($this->data))
		   {
             $this->Demomovie->create();  
             //echo "testing";die; 
			 //echo $far = $this->form->data;die;
			// pr($this->data); die;
			   $data = $this->data;
			   //$data["Demomovie"]["title"] = "ram";
			   //pr($data); die;
               $data["Demomovie"]["title"] = $data['name'];
			   $data["Demomovie"]["genre"] = $data['Type'];
			   $data["Demomovie"]["rating"] = $data['rating'];
			   $data["Demomovie"]["format"] = $data['format'];
			   $data["Demomovie"]["length"] = $data['length']; 
			   $data["Demomovie"]["Created"] = $data['created'];
             if ($this->Demomovie->save($this->request->data)) 
			 {
                $this->Session->setFlash(__('The movie has been saved'));  
                $this->redirect(array('action' => 'index'));  
             }
			  else 
			  {
                $this->Session->setFlash ('The movie could not be saved. Please, try again.');  
             }  
          }  
       } 
	   }
      
       public function delete($id = null)  
       {  
          if (!$id) 
		  {
             $this->Session->setFlash('Invalid id for movie');  
             $this->redirect(array('action' => 'index'));  
          }
          if ($this->Demomovie->delete($id)) 
		  {
          $this->Session->setFlash('Movie deleted');  
          } 
		  else 
		  {  
         $this->Session->setFlash(__('Movie was not deleted', true));  
      
          }  
          $this->redirect(array('action' => 'index'));  
       }
       function edit($id = null) 
	   {
         //   echo $id; die;
		   $post = $this->Demomovie->findById($id);

          if (!$id && empty($this->data)) 
		  {
			  
             $this->Session->setFlash('Invalid movie');  
             $this->redirect(array('action' => 'index'));  
          }
//		  echo $id; die; 
          if (!empty($this->data))
		   {
			    $data = $this->data;//die;
				//echo $id;
			  // pr($data); die;
			    $data["Demomovie"]["id"] = $id;
			   $data["Demomovie"]["name"] = $data['name'];
			   $data["Demomovie"]["Type"] = $data['Type'];
			   $data["Demomovie"]["rating"] = $data['rating'];
			   $data["Demomovie"]["format"] = $data['format'];
			   $data["Demomovie"]["length"] = $data['length'];
			    
             if ($this->Demomovie->save($data)) 
			 {
				// echo $id; die; 
                $this->Session->setFlash('The movie has been saved');  
                $this->redirect(array('action' => 'index'));  
             }
			  else 
			 {
             $this->Session->setFlash('The movie could not be saved. Please, try again.');  
          }  
       }
       if (empty($this->data)) 
	   {
          $this->data = $this->Demomovie->read(null, $id);        
       }  	         
    }        
    function view($id = null) 
	{  
      if (!$id)
	   {  
           $this->Session->setFlash('Invalid movie');  
           $this->redirect(array('action' => 'index'));  
       }  
           $this->set('movie', $this->Demomovie->findById($id));  
      }      
    }        
    ?>   