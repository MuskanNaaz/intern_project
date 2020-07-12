<body class="bg-secondary">
    <div class="container-fluid mt-3">
    <div class="row ">
        <div class="col-lg-3 mt-3">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action ">
                    Caterogy
                </a>
                <a href="<?= base_url('admin/insertbook');?>" class="list-group-item list-group-item-action">Insert Book</a>
                <a href="<?= base_url('admin/manage');?>" class="list-group-item list-group-item-action active">Manage Book</a>
            </div>
        </div>
        <div class="col-lg-9">
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
    </div>
</body>
