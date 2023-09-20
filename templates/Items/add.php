<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="items form content">
            <?= $this->Form->create($item) ?>
            <fieldset>
                <legend><?= __('Add Item') ?></legend>
                <?php
                    echo $this->Form->control('item_id');
                    echo $this->Form->control('name');
                    echo $this->Form->control('anchor');
                    echo $this->Form->control('description');
                    echo $this->Form->control('things_to_know');
                    echo $this->Form->control('requirements');
                    echo $this->Form->control('pending_time');
                    echo $this->Form->control('device_targeting');
                    echo $this->Form->control('creatives');
                    echo $this->Form->control('epc');
                    echo $this->Form->control('categories');
                    echo $this->Form->control('geo_targeting');
                    echo $this->Form->control('events');
                    echo $this->Form->control('click_url');
                    echo $this->Form->control('support_url');
                    echo $this->Form->control('preview_url');
                    echo $this->Form->control('country_stats');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
