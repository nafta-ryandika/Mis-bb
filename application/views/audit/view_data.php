<style>
    td.nowrap-column {
        white-space: nowrap
    }
</style>

<?php
echo ($inAuditaction . "lalalala");
?>

<table class="table table-hover" id="dataTable">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <!-- <th scope="col">Total</th> -->
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($previewData as $rowData) :
        ?>
            <tr>
                <td scope="row"><?= $i ?></td>
                <td><?= $rowData['id']; ?></td>
            </tr>
        <?php
            $i++;
        endforeach;
        ?>
    </tbody>
</table>