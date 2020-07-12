<div class="container mt-4">
    <div class="row mt-2">
        <div class="col-lg-4 offset-2">
            <div class="card">
                <div class="card-body bg-primary">
                    <p class="h2 text-light">Total Book Enter:
                    (<?php
                        echo $this->datawork->count_data('insertbook');
                        ?>)</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 mt-3">
        <div class="card shadow">
            <div class="card-body">
                <table class="table table-striped table-hover table-sm">
                    <tr>
                        <th>Sr.No</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>price</th>
                        <th>page</th>
                        <th>category</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($insert as $i):?>
                    <tr>
                        <td><?= $i->id;?></td>
                        <td><?= $i->title;?></td>
                        <td><?= $i->author;?></td>
                        <td><?= $i->price;?></td>
                        <td><?= $i->page;?></td>
                        <td><?= $i->cat;?></td>
                        <td><?= anchor_popup('seller/seller_view/'.$i->id,'view', array('class'=>'btn btn-success btn-sm   fas fa-eye'));?>
                            <?= anchor_popup('seller/seller_edit/'.$i->id,'edit', array('class'=>"btn btn-info btn-sm fas fa-edit"));?>
                            <a href="<?= base_url('seller/delete/'.$i->id);?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                            <a href="" class="btn btn-sm text-light" style="background-color: lightcoral">Deactivate</a></td>
                    </tr>
                    <?php endforeach;?>
                </table>
            </div>
        </div>
    </div>
</div>