<div class="container">
    <div class="row mt-4">
        <div class="col-lg-6">
        <?php foreach($contact as $c):?>
            <div class="card text-light">
                <div class="card-body bg-secondary">
                   <p class="h5" style="margin-left: 50%;">MobileNo:- <?= $c->mobile;?></p>
                   <p class="h6" style="margin-left: 50%;">City:- <?= $c->city;?></p>
                   <p class="h6" style="margin-left: 50%;">State:- <?= $c->state;?></p>
                   <p class="h6" style="margin-left: 50%;">Alternate:- <?= $c->mobile2;?></p>
                </div>
            </div>
            <?php endforeach;;?>
        </div>
        <div class="col-lg-5">
            <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false"
                    aria-controls="collapseExample">Add new Address</button>
            <div class="collapse" id="collapseExample">
            <p class="h4 mt-2">My Contact Details</p>
            <div class="card">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">State</label>
                            <input type="text" class="form-control" name="state" value="<?= set_value('state');?>">
                            <?= form_error('state');?>
                        </div>
                        <div class="form-group">
                            <label for="">City</label>
                            <input type="text" class="form-control" name="city" value="<?= set_value('city');?>">
                            <?= form_error('city');?>
                        </div>
                        <div class="form-group">
                            <label for="">Village/town</label>
                            <textarea class="form-control" name="town" value="<?= set_value('town');?>"></textarea>
                            <?= form_error('town');?>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="">MobileNo</label>
                                    <input type="text" class="form-control" name="mobile" value="<?= set_value('mobile');?>">
                                    <?= form_error('mobile');?>
                                </div>
                                <div class="col-lg-6">
                                    <label for="">AlternateNo</label>
                                    <input type="text" class="form-control" name="mobile2" value="<?= set_value('mobile2');?>">
                                    <?= form_error('mobile2');?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>v