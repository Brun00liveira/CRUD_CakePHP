<?php
use Migrations\AbstractMigration;

class CreateProfissoesTable extends AbstractMigration
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
        $table = $this->table('profissoes');
        $table
        ->addColumn('profissao', 'string', [
            'limit' => 100, 
            'default' => null, 
            'null' => false]);
        $table->create();
    }
}
