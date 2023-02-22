<?php
use Migrations\AbstractMigration;

class AddForeignKeyToClientes extends AbstractMigration
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
    $table->addColumn('profissao_id', 'integer', ['null' => true]);
    $table->addForeignKey('profissao_id', 'profissoes', 'id', ['delete' => 'CASCADE', 'update' => 'CASCADE']);
    $table->update();
    }
}
