<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Items Model
 *
 * @property \App\Model\Table\ItemsTable&\Cake\ORM\Association\BelongsTo $Items
 * @property \App\Model\Table\ItemsTable&\Cake\ORM\Association\HasMany $Items
 *
 * @method \App\Model\Entity\Item newEmptyEntity()
 * @method \App\Model\Entity\Item newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Item[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Item get($primaryKey, $options = [])
 * @method \App\Model\Entity\Item findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Item patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Item[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Item|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Item saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Item[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Item[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Item[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Item[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ItemsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('items');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Items', [
            'foreignKey' => 'item_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Items', [
            'foreignKey' => 'item_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->notEmptyString('item_id');

        $validator
            ->scalar('name')
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('anchor')
            ->requirePresence('anchor', 'create')
            ->notEmptyString('anchor');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->requirePresence('things_to_know', 'create')
            ->notEmptyString('things_to_know');

        $validator
            ->scalar('requirements')
            ->requirePresence('requirements', 'create')
            ->notEmptyString('requirements');

        $validator
            ->requirePresence('pending_time', 'create')
            ->notEmptyString('pending_time');

        $validator
            ->requirePresence('device_targeting', 'create')
            ->notEmptyString('device_targeting');

        $validator
            ->requirePresence('creatives', 'create')
            ->notEmptyString('creatives');

        $validator
            ->decimal('epc')
            ->requirePresence('epc', 'create')
            ->notEmptyString('epc');

        $validator
            ->requirePresence('categories', 'create')
            ->notEmptyString('categories');

        $validator
            ->requirePresence('geo_targeting', 'create')
            ->notEmptyString('geo_targeting');

        $validator
            ->requirePresence('events', 'create')
            ->notEmptyString('events');

        $validator
            ->scalar('click_url')
            ->requirePresence('click_url', 'create')
            ->notEmptyString('click_url');

        $validator
            ->scalar('support_url')
            ->requirePresence('support_url', 'create')
            ->notEmptyString('support_url');

        $validator
            ->scalar('preview_url')
            ->requirePresence('preview_url', 'create')
            ->notEmptyString('preview_url');

        $validator
            ->requirePresence('country_stats', 'create')
            ->notEmptyString('country_stats');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('item_id', 'Items'), ['errorField' => 'item_id']);

        return $rules;
    }
}
