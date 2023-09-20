<?php
namespace App\Command;

use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;
use Cake\Http\Client;
use Cake\Utility\Security;

class FetchAPICommand extends Command
{
    public function execute(Arguments $args, ConsoleIo $io): int
    {
        $conection = mysqli_connect('localhost', 'timebucks', 'chicken', 'timebucksDB') or die('Error in Connecting: ' . mysqli_error($conection));
        $http = new Client();
        $url = 'https://api.adgatemedia.com/v3/offers/?aff=48864&api_key=155efa664a706f295fb446570041d707&wall_code=o6qb';
        $json = file_get_contents($url);  
        $querydata = json_decode($json, true);
        $data = $querydata['data'];
        $statement = mysqli_prepare($conection, 'INSERT INTO items (item_id, name, anchor, description, things_to_know, requirements, pending_time, device_targeting, creatives, epc, categories, geo_targeting, events, click_url, support_url, preview_url, country_stats) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

        mysqli_stmt_bind_param($statement, 'isssssissdsssssss', $item_id, $name, $anchor, $description, $things_to_know, $requirements, $pending_time, $device_targeting, $creatives, $epc, $categories, $geo_targeting, $events, $click_url, $support_url, $preview_url, $country_stats);

        foreach ($data as $row) {
            $item_id = (int) $row['id'];
            $name = $row['name'];
            $anchor = $row['anchor'];
            $description = $row['description'];
            $things_to_know = implode(", ", $row['things_to_know']);
            $requirements = $row['requirements'];
            $pending_time = $row['pending_time'];
            $device_targeting =  print_r($row['device_targeting']);
            $creatives = implode(", ", $row['creatives']);
            $epc = $row['epc'];
            $categories = implode(", ", $row['categories']);
            $geo_targeting =  print_r($row['geo_targeting']);
            $events =  print_r($row['events']);
            $click_url = $row['click_url'];
            $support_url = $row['support_url'];
            $preview_url = $row['preview_url'];
            $country_stats = print_r($row['country_stats']);

            mysqli_stmt_execute($statement);
        } 

        $io->out('Information Loaded');

        return static::CODE_SUCCESS;
        mysqli_close($conection);
    }
}