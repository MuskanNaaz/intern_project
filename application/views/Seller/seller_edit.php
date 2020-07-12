
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body>
<div class="container mt-3">


    <div class="row ">
        <div class="col-lg-8  mt-3">
            <?php foreach($infor as $e):?>
            <form action="<?= base_url('seller/seller_edit/'.$this->uri->segment(3));?>" method="post" enctype="multipart/form-data">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="">Author <sup class="text-danger">*</sup></label>
                                    <input type="text" name="author" class="form-control" value="<?= $e->author;?>">
                                    <?= form_error('author');?>
                                </div>
                                <div class="col-lg-6">
                                    <label for="">Title<sup class="text-danger">*</sup></label>
                                    <input type="text" name="title" class="form-control"
                                           onblur="titles(this.value)" value="<?= $e->title;?>">
                                    <?= form_error('title');?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="">price<sup class="text-danger ">*</sup></label>
                                    <input type="text" name="price" class="form-control" onblur= "prices(this.value)" value="<?= $e->price;?>">
                                    <?= form_error('price');?>
                                </div>
                                <div class="col-lg-6">
                                    <label for="">oldprice<sup class="text-danger">*</sup></label>
                                    <input type="text" name="oldprice" class="form-control" value="<?= $e->oldprice;?>">
                                    <?= form_error('oldprice');?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="">Isbn<sup class="text-danger">*</sup></label>
                                    <input type="text" name="isbn" class="form-control" value="<?= $e->isbn;?>">
                                    <?= form_error('isbn');?>
                                </div>
                                <div class="col-lg-6">
                                    <label for="">page<sup class="text-danger">*</sup></label>
                                    <input type="text" name="page" class="form-control" value="<?= $e->page;?>">
                                    <?= form_error('page');?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">descr<sup class="text-danger ">*</sup></label>
                            <textarea name="descr" class="form-control"><?= $e->descr;?>
                        </textarea>
                            <?= form_error('descr');?>
                        </div>
                        <div class="form-group">
                            <label for="">category<sup class="text-danger ">*</sup></label>
                            <input type="text" name="cat" class="form-control" value="<?= $e->cat;?>">
                            <?= form_error('cat');?>
                        </div>

                        <div class="form-group">
                            <label for="">Image</label>
                            <img src="<?= $e->image;?>" alt="">
                            <?= form_error('image');?>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success ml-5" >
                        </div>
                    </div>
                </div>
            </form>
    <?php endforeach;?>
        </div>
    </div>
</div>
</body>
