<?php
namespace App\Controller;

use App\Controller\AppController;


class UsersController extends AppController
{
    public function index()
    {
        $users = $this->Users->find('all');
        $this->set(compact('users'));
    }

    public function view($id = null)
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    public function add()
    {
        $user = $this->Users->newEmptyEntity();
    
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
    
            // Convert the array of selected strengths to a comma-separated string
            $user->strength = implode(',', $this->request->getData('strength'));
    
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add the user.'));
        }
    
        $this->set(compact('user'));
    }
    

    public function edit($id = null)
{
    $user = $this->Users->get($id);

    if ($this->request->is(['patch', 'post', 'put'])) {
        $user = $this->Users->patchEntity($user, $this->request->getData());

        // Convert the array of selected strengths to a comma-separated string
        $user->strength = implode(',', $this->request->getData('strength'));

        if ($this->Users->save($user)) {
            $this->Flash->success(__('The user has been saved.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Unable to update the user.'));
    }

    $this->set(compact('user'));
}


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('Unable to delete the user.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
