<?php
use Migrations\AbstractMigration;

class CreateClientesTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('clientes');
        $table->addPrimaryKey('id', 'integer', [
                'autoIncrement' => true,
                ])
            ->addColumn('nome', 'string', [
                'limit' => 225, 
                'default' => null, 
                'null' => false])
            ->addColumn('data_de_nascimento', 'date', [
                'default' => null, 
                'null' => false]);
            $table->create();
    }
}
