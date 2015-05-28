<?php
class ContactController extends AppController {
	

	public function index() {
		if($this->request->data){
			$data = array(
					'name' => $this->request->data['Contact']['name'],
					'phone' => $this->request->data['Contact']['phone'],
					'email' => $this->request->data['Contact']['email'],
					'subject' => $this->request->data['Contact']['subject'],
					'content' => $this->request->data['Contact']['content'],
					'date_add' => date('Y-m-d H:i:s')
			);
			$this->Contact->save($data);
			
		}	
	}
	

}