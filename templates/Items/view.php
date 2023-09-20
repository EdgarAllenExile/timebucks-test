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
            <?= $this->Html->link(__('Edit Item'), ['action' => 'edit', $item->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Item'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Items'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Item'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="items view content">
            <h3><?= h($item->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($item->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Anchor') ?></th>
                    <td><?= h($item->anchor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Things To Know') ?></th>
                    <td><?= h($item->things_to_know) ?></td>
                </tr>
                <tr>
                    <th><?= __('Device Targeting') ?></th>
                    <td><?= h($item->device_targeting) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creatives') ?></th>
                    <td><?= h($item->creatives) ?></td>
                </tr>
                <tr>
                    <th><?= __('Categories') ?></th>
                    <td><?= h($item->categories) ?></td>
                </tr>
                <tr>
                    <th><?= __('Geo Targeting') ?></th>
                    <td><?= h($item->geo_targeting) ?></td>
                </tr>
                <tr>
                    <th><?= __('Events') ?></th>
                    <td><?= h($item->events) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country Stats') ?></th>
                    <td><?= h($item->country_stats) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($item->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Item Id') ?></th>
                    <td><?= $this->Number->format($item->item_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pending Time') ?></th>
                    <td><?= $this->Number->format($item->pending_time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Epc') ?></th>
                    <td><?= $this->Number->format($item->epc) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($item->description)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Requirements') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($item->requirements)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Click Url') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($item->click_url)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Support Url') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($item->support_url)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Preview Url') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($item->preview_url)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Items') ?></h4>
                <?php if (!empty($item->items)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Item Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Anchor') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Things To Know') ?></th>
                            <th><?= __('Requirements') ?></th>
                            <th><?= __('Pending Time') ?></th>
                            <th><?= __('Device Targeting') ?></th>
                            <th><?= __('Creatives') ?></th>
                            <th><?= __('Epc') ?></th>
                            <th><?= __('Categories') ?></th>
                            <th><?= __('Geo Targeting') ?></th>
                            <th><?= __('Events') ?></th>
                            <th><?= __('Click Url') ?></th>
                            <th><?= __('Support Url') ?></th>
                            <th><?= __('Preview Url') ?></th>
                            <th><?= __('Country Stats') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($item->items as $items) : ?>
                        <tr>
                            <td><?= h($items->id) ?></td>
                            <td><?= h($items->item_id) ?></td>
                            <td><?= h($items->name) ?></td>
                            <td><?= h($items->anchor) ?></td>
                            <td><?= h($items->description) ?></td>
                            <td><?= h($items->things_to_know) ?></td>
                            <td><?= h($items->requirements) ?></td>
                            <td><?= h($items->pending_time) ?></td>
                            <td><?= h($items->device_targeting) ?></td>
                            <td><?= h($items->creatives) ?></td>
                            <td><?= h($items->epc) ?></td>
                            <td><?= h($items->categories) ?></td>
                            <td><?= h($items->geo_targeting) ?></td>
                            <td><?= h($items->events) ?></td>
                            <td><?= h($items->click_url) ?></td>
                            <td><?= h($items->support_url) ?></td>
                            <td><?= h($items->preview_url) ?></td>
                            <td><?= h($items->country_stats) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Items', 'action' => 'view', $items->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Items', 'action' => 'edit', $items->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Items', 'action' => 'delete', $items->id], ['confirm' => __('Are you sure you want to delete # {0}?', $items->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
