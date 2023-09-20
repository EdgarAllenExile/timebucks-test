
<head>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css"/>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    
    <script type="text/javascript">
        $(document).ready( function () {
        let table = $('#items').DataTable({
            columnDefs: [
                { orderable: false, targets: [0, 1, 2, 4] },
                { "searchable": false, "targets": [1, 2, 3, 4] }
            ],
            order: [[3, 'dsc']
            ]
        });
        let cache = table.columns(0).cache('search').sort().unique();
        $('#items_filter input[type=search]').autocomplete({
            source: cache['0']               
        });
    });
    </script>

</head>
<body>
    <h1>Items</h1>
    <table id="items" class="display">
        <thead>
            <tr>
                <th>Name</th>
                <th>Requirements</th>
                <th>Description</th>
                <th>ECPC</th>
                <th>Link</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item): ?>
                <tr>
                    <td><?= h($item->name) ?></td>
                    <td><?= h($item->requirements) ?></td>
                    <td><?= h($item->things_to_know) ?></td>
                    <td><?= $this->Number->format($item->epc) ?></td>
                    <td><a href= <?=$item->click_url ?> target="_blank"> Go </a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
