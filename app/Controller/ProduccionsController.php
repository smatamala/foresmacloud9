<?php
class ProduccionsController extends AppController{
	public $helpers =array ('Html','Form');
	public $components =array ('Session');


	
		public function index(){
		$this->Produccion->recursive=0;
		$this->set('produccions',$this->paginate());
		//$this->set('administradores',$this->Admin->findByid(1));
		//$this->set('administradores',$this->Admin->findBynombre(admin));
		//$this->set('administradores',$this->Admin->findBypass(admin));
		//$this->set('administradores',$this->Admin->findByacceso(0));
	}
	public function isAuthorized($user){
			if($user['role']=='user'){
				if(in_array($this->action,array('add','index','view'))){
					return true;
				}
				else{
					if($this->Auth->user('id')){
						$this->Session->$this->Session->setFlash('No puede acceder', 'default', array('class'=>'alert alert-danger'));
						$this->redirect($this->Auth->redirect());
					}
				}
			}
			return parent::isAuthorized($user);
		}
public function add(){
		if($this->request->is('post')):
			if($this->Produccion->save($this->request->data)):
				$this->Session->setFlash('Produccion agregada');

			$horai = $this->Produccion->find(
              'all',
                array(
                       'fields'=>array(
                                               'Produccion.horai',
                                     )));
			$horaf = $this->Produccion->find(
              'all',
                array(
                       'fields'=>array(
                                               'Produccion.horaf',
                                     )));
			$resul= $horaf-$horai;
			$this->Produccion->updateAll( array('Produccion.produccion' => $resul));
			

				$this->redirect(array('action'=>'index'));
			endif;
		endif;

		$empleados=$this->Produccion->Empleado->find('list');
		$this->set(compact('empleados'));

		$maquinas=$this->Produccion->Maquina->find('list');
		$this->set(compact('maquinas'));

		$faenas=$this->Produccion->Faena->find('list');
		$this->set(compact('faenas'));

		$codigos=$this->Produccion->Codigo->find('list');
		$this->set(compact('codigos'));

	
		

	}

	public function addadmin(){
		if($this->request->is('post')):
			if($this->Admin->save($this->request->data)):
				$this->Session->setFlash('guardado');
				$this->redirect(array('action'=>'index'));
			endif;
		endif;

	}
	public function edit($id = null){
		$this->Admin->id=$id;
		if($this->request->is('get')):
			$this->request->data=$this->Admin->read();
		else:
			if($this->Admin->save($this->request->data)):
				$this->Session->setFlash('usuario '.
										$this->request->data['Admin']['nombre']
													.' editado!');
				$this->redirect(array('action'=>'index'));
			else:
				$this->Session->setFlash('no se edito');
			endif;
		endif;
	}
	public function delete($id){
		if ($this->request->is('get')):
			throw new MethodNotAllowedException();
		else:
			if($this->Admin->delete($id)):
				$this->Session->setFlash('usuario eliminado!!!!');
				$this->redirect(array('action'=>'index'));
			endif;
		endif;

	}
	
}