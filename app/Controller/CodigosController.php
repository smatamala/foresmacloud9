<?php
App::uses('AppController', 'Controller');
/**
 * Codigos Controller
 *
 * @property Codigo $Codigo
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CodigosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Codigo->recursive = 0;
		$this->set('codigos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Codigo->exists($id)) {
			throw new NotFoundException(__('Invalid codigo'));
		}
		$options = array('conditions' => array('Codigo.' . $this->Codigo->primaryKey => $id));
		$this->set('codigo', $this->Codigo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Codigo->create();
			if ($this->Codigo->save($this->request->data)) {
				$this->Session->setFlash(__('The codigo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The codigo could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Codigo->exists($id)) {
			throw new NotFoundException(__('Invalid codigo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Codigo->save($this->request->data)) {
				$this->Session->setFlash(__('The codigo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The codigo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Codigo.' . $this->Codigo->primaryKey => $id));
			$this->request->data = $this->Codigo->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Codigo->id = $id;
		if (!$this->Codigo->exists()) {
			throw new NotFoundException(__('Invalid codigo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Codigo->delete()) {
			$this->Session->setFlash(__('The codigo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The codigo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
