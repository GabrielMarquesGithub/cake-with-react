<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BooksRentedByCustomers Controller
 *
 * @property \App\Model\Table\BooksRentedByCustomersTable $BooksRentedByCustomers
 * @method \App\Model\Entity\BooksRentedByCustomer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BooksRentedByCustomersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Customers', 'Books'],
        ];
        $booksRentedByCustomers = $this->paginate($this->BooksRentedByCustomers);

        $this->set(compact('booksRentedByCustomers'));
    }

    /**
     * View method
     *
     * @param string|null $id Books Rented By Customer id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $booksRentedByCustomer = $this->BooksRentedByCustomers->get($id, [
            'contain' => ['Customers', 'Books'],
        ]);

        $this->set(compact('booksRentedByCustomer'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $booksRentedByCustomer = $this->BooksRentedByCustomers->newEmptyEntity();
        if ($this->request->is('post')) {
            $booksRentedByCustomer = $this->BooksRentedByCustomers->patchEntity($booksRentedByCustomer, $this->request->getData());
            if ($this->BooksRentedByCustomers->save($booksRentedByCustomer)) {
                $this->Flash->success(__('The books rented by customer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The books rented by customer could not be saved. Please, try again.'));
        }
        $customers = $this->BooksRentedByCustomers->Customers->find('list', ['limit' => 200])->all();
        $books = $this->BooksRentedByCustomers->Books->find('list', ['limit' => 200])->all();
        $this->set(compact('booksRentedByCustomer', 'customers', 'books'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Books Rented By Customer id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $booksRentedByCustomer = $this->BooksRentedByCustomers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $booksRentedByCustomer = $this->BooksRentedByCustomers->patchEntity($booksRentedByCustomer, $this->request->getData());
            if ($this->BooksRentedByCustomers->save($booksRentedByCustomer)) {
                $this->Flash->success(__('The books rented by customer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The books rented by customer could not be saved. Please, try again.'));
        }
        $customers = $this->BooksRentedByCustomers->Customers->find('list', ['limit' => 200])->all();
        $books = $this->BooksRentedByCustomers->Books->find('list', ['limit' => 200])->all();
        $this->set(compact('booksRentedByCustomer', 'customers', 'books'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Books Rented By Customer id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $booksRentedByCustomer = $this->BooksRentedByCustomers->get($id);
        if ($this->BooksRentedByCustomers->delete($booksRentedByCustomer)) {
            $this->Flash->success(__('The books rented by customer has been deleted.'));
        } else {
            $this->Flash->error(__('The books rented by customer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
