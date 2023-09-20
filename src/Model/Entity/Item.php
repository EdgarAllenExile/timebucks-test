<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Item Entity
 *
 * @property int $id
 * @property int $item_id
 * @property string $name
 * @property string $anchor
 * @property string $description
 * @property array $things_to_know
 * @property string $requirements
 * @property int $pending_time
 * @property array $device_targeting
 * @property array $creatives
 * @property string $epc
 * @property array $categories
 * @property array $geo_targeting
 * @property array $events
 * @property string $click_url
 * @property string $support_url
 * @property string $preview_url
 * @property array $country_stats
 *
 * @property \App\Model\Entity\Item[] $items
 */
class Item extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'item_id' => true,
        'name' => true,
        'anchor' => true,
        'description' => true,
        'things_to_know' => true,
        'requirements' => true,
        'pending_time' => true,
        'device_targeting' => true,
        'creatives' => true,
        'epc' => true,
        'categories' => true,
        'geo_targeting' => true,
        'events' => true,
        'click_url' => true,
        'support_url' => true,
        'preview_url' => true,
        'country_stats' => true,
        'items' => true,
    ];
}
