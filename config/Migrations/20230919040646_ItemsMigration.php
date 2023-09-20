<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class ItemsMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('items');
        $table->addColumn('item_id', 'biginteger', [
            'null' => false,
        ]);
        $table->addColumn('name', 'text', [
            'limit' => 1000,
            'null' => false,
        ]);
        $table->addColumn('anchor', 'text', [
            'limit' => 1000,
            'null' => false,
        ]);
        $table->addColumn('description', 'string', [
            'limit' => 1000,
            'null' => false,
        ]);
        $table->addColumn('things_to_know', 'string', [
            'limit' => 1000,
            'null' => false,
        ]);
        $table->addColumn('requirements', 'string', [
            'limit' => 1000,
            'null' => false,
        ]);
        $table->addColumn('pending_time', 'biginteger', [
            'null' => false,
        ]);
        $table->addColumn('device_targeting', 'string', [
            'limit' => 1000,
            'null' => false,
        ]);
        $table->addColumn('creatives', 'string', [
            'limit' => 1000,
            'null' => false,
        ]);
        $table->addColumn('epc', 'decimal', [
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('categories', 'string', [
            'limit' => 1000,
            'null' => false,
        ]);
        $table->addColumn('geo_targeting', 'text', [
            'null' => false,
        ]);
        $table->addColumn('events', 'string', [
            'limit' => 2000,
            'null' => false,
        ]);
        $table->addColumn('click_url', 'text', [
            'null' => false,
        ]);
        $table->addColumn('support_url', 'text', [
            'limit' => 1000,
            'null' => false,
        ]);
        $table->addColumn('preview_url', 'text', [
            'null' => false,
        ]);
        $table->addColumn('country_stats', 'string', [
            'limit' => 1000,
            'null' => false,
        ]);      
        $table->create();
    }
}
