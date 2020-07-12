<div class="container mt-3">
    <div class="row ">
        <div class="col-lg-8  mt-3">
            <?= $this->session->flashdata('success');?>

            <form action="<?= base_url('seller/insertbook');?>" method="post" enctype="multipart/form-data">
                <div class="card shadow">
                    <div class="card-body">
                        <p class="h2 text-muted">Which book do you want to sell </p>
                        <p class="" style="margin-left: 80%"><i class="text-danger">*</i> Required field</p>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="">Author <sup class="text-danger">*</sup></label>
                                        <input type="text" name="author" class="form-control" value="<?= set_value('author');?>">
                                        <?= form_error('author');?>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="">Title<sup class="text-danger">*</sup></label>
                                        <input type="text" name="title" class="form-control"
                                              onblur="titles(this.value)" value="<?= set_value('title');?>">
                                        <?= form_error('title');?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="">price<sup class="text-danger ">*</sup></label>
                                        <input type="text" name="price" class="form-control" onblur= "prices(this.value)" value="<?= set_value('price');?>">
                                        <?= form_error('price');?>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="">oldprice<sup class="text-danger">*</sup></label>
                                        <input type="text" name="oldprice" class="form-control" value="<?= set_value('oldprice');?>">
                                        <?= form_error('oldprice');?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="">Isbn<sup class="text-danger">*</sup></label>
                                        <input type="text" name="isbn" class="form-control" value="<?= set_value('isbn');?>">
                                        <?= form_error('isbn');?>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="">page<sup class="text-danger">*</sup></label>
                                        <input type="text" name="page" class="form-control" value="<?= set_value('page');?>">
                                        <?= form_error('page');?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">descr<sup class="text-danger ">*</sup></label>
                                <textarea name="descr" class="form-control"
                                          onblur="descrp(this.value)" value="<?= set_value('descr');?>">
                        </textarea>
                                <?= form_error('descr');?>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">


                                <label for="">category<sup class="text-danger ">*</sup></label>
                                <input type="text" name="cat" class="form-control" value="<?= set_value('cat');?>">
                                <?= form_error('cat');?>
                                    </div>
                                        <div class="col-lg-6">
                                <label for="">status<sup class="text-danger ">*</sup></label>
                            <select name="status" id="" class="form-control" value="<?= set_value('status');?>">
                                <option>0</option>
                                <option>1</option>
                            </select>
                                <?= form_error('status');?>
                                    </div>
                                </div>
                            </div>

                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control"  onblur="pic(this.value)" value="<?= set_value('image');?>">
                    <?= form_error('image');?>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success ml-5" >
                    </div>
        </div>
    </div>
    </form>
</div>
        <div class="col-lg-3 offset-1 mt-3">
            <div class="text-dark ">
                <img src="http://pluspng.com/img-png/png-open-book-black-and-white-noun-project-200.png" id="title" class="rounded-circle border border-primary p-3"
                                        alt="Responsive image" width="55%" style=" border-color: #129FEA;">
            </div>
            <p class="text-muted">Add Your Book title</p>
                <br>
            <div class="text-dark">
                <img src="https://image.flaticon.com/icons/png/512/85/85536.png" class="border border-primary p-3" id="descr" alt="Responsive image" width="55%"
                     style=" border-radius: 50%; border-color: #129FEA; height: 140px;">
            </div>
            <p class="text-muted">Add Book Description</p>
                <br>
            <div class="text-dark">
                <img src="https://cdn2.iconfinder.com/data/icons/business-set-8-1/128/b-89-512.png"  id="price" class="rounded-circle border border-primary p-3" alt="Responsive image" width="55%" style="  border-color: #129FEA; height: 140px">
            </div>
            <p class="text-muted ml-3">Add Price</p>
            <br>
            <div class="text-dark">
                <img src="https://cdn2.iconfinder.com/data/icons/picol-vector/32/image_add-512.png" id="image" class="rounded-circle border border-primary p-3"
                     alt="Responsive image" width="55%" style="  border-color: #129FEA; height: 140px">
            </div>
            <p class="text-muted ml-3">Add Image</p>
            <br>

        </div>
        </div>
</div>
</div>
<script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

<script>
    function titles(value) {
    var title1=document.getElementById("title");
    title.style.backgroundColor="lightskyblue";
    }
    function descrp(value) {
    var descr1=document.getElementById("descr");
    descr1.style.backgroundColor="lightskyblue";
    }
    function prices(value) {
    var price1=document.getElementById("price");
    price1.style.backgroundColor="lightskyblue";
    }
    function pic(value) {
    var image1=document.getElementById("image");
    image1.style.backgroundColor="lightskyblue";
    }
</script>
