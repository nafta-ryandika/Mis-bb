<style>
    td.nowrap-column {
        white-space: nowrap
    }
</style>

<?php
// echo ($inAuditaction . "lalalala");
?>

<table class="table table-hover" id="dataTable">
    <thead>
        <tr>
            <?php
            if ($inAuditaction == 1) {
            ?>
                <th scope="col">#</th>
                <th scope="col">ID</th>
            <?php
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($sheetData as $rowData) :
        ?>
            <tr>
                <td scope="row"><?= $i ?></td>
                <?php foreach ($rowData as $cell): ?>
                    <td><?= htmlspecialchars($cell) ?></td>
                <?php endforeach; ?>
            </tr>
        <?php
            $i++;
        endforeach;
        ?>
    </tbody>
</table>