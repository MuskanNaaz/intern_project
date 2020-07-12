<div class="container-fluid mt-n2" style="background: linear-gradient(rgba(108, 161, 170, 0.94),wheat);">
    <?php foreach ($infor as $n):?>
    <div class="row mt-3">
        <div class="col-lg-4 offset-1">
        <div class="card shadow mt-3">
            <div class="card-img-top">
                <img src="<?= base_url('access/'.$n->image);?>" alt="" style="width: 100%" height="400px">
            </div>
        </div>

            <div class="row mt-4">
                <div class="col-lg-6">
                    <a href="<?= base_url('buyer/buyer_address');?>" class="btn btn-outline-danger form-control">Buy</a>
                </div>
                <div class="col-lg-6">
                    <a href="" class="btn btn-outline-info form-control">Add On Cart</a>
                </div>
            </div>
    </div>
        <div class="col-lg-5 offset-2">
            <p class="h1 text-danger" style="font-family: 'Kaushan Script', cursive;"><?= $n->title;?></p>
            <p class="h5 text-muted">Author: <?= $n->author;?></p>
            
                    <h5>Description:</h5>
                    <hr>
                    <?= $n->descr;?>
                </div>
            </div>
    <?php  endforeach;?>

</div>
