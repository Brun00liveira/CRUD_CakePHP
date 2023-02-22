<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Profissoes Controller
 *
 * @property \App\Model\Table\ProfissoesTable $Profissoes
 *
 * @method \App\Model\Entity\Profisso[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfissoesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    { 
        $this->paginate = [ 
            'limit' => 10,
            'order' => [
                'id' => 'desc'
            ]

        ];
        $profissoes = $this->paginate($this->Profissoes);
        
        $this->set(compact('profissoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Profisso id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $profisso = $this->Profissoes->get($id, [
            'contain' => [],
        ]);

        $this->set('post', $profisso);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $profisso = $this->Profissoes->newEntity();
        if ($this->request->is('post')) {
            $profisso = $this->Profissoes->patchEntity($profisso, $this->request->getData());
            if ($this->Profissoes->save($profisso)) {
                $this->Flash->success(__('The profisso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profisso could not be saved. Please, try again.'));
        }
        $this->set(compact('profisso'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Profisso id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $profisso = $this->Profissoes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $profisso = $this->Profissoes->patchEntity($profisso, $this->request->getData());
            if ($this->Profissoes->save($profisso)) {
                $this->Flash->success(__('The profisso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profisso could not be saved. Please, try again.'));
        }
        $this->set(compact('profisso'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Profisso id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $profisso = $this->Profissoes->get($id);
        if ($this->Profissoes->delete($profisso)) {
            $this->Flash->success(__('The profisso has been deleted.'));
        } else {
            $this->Flash->error(__('The profisso could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
