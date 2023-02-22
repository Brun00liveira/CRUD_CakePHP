<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Profissoes Model
 *
 * @method \App\Model\Entity\Profisso get($primaryKey, $options = [])
 * @method \App\Model\Entity\Profisso newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Profisso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Profisso|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profisso saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profisso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Profisso[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Profisso findOrCreate($search, callable $callback = null, $options = [])
 */
class ProfissoesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('profissoes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('profissao')
            ->maxLength('profissao', 100)
            ->requirePresence('profissao', 'create')
            ->notEmptyString('profissao');

        return $validator;
    }
}
