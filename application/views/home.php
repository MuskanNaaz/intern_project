
<div class="header-content">
   <div class="row">
       <div class="col-lg-3"></div>
       <div class="col-lg-6">
    <p class="text-light display-4 ml-5" style="font-family: 'Shojumaru', cursive; " >The Only place to buy, sell, exchange Book..</p>
    
        <form class="mt-3" method="get" action="<?= base_url('user/index');?>">
            <div class="form mt-1">
            <div class="input-group ">
                <input class="form-control sm-2" type="search" name="search" placeholder="e.g  etc" style="border-radius:100px 0px 0px 80px;padding: 5px;">
                <div class="input-group-append">
                    <button type="submit" class="" style="border-radius:0px 80px 80px 0px;padding: 5px;"><i class="fas fa-search"></i></button>
                </div>
            </div>
          </div>
            </form></div>
    </div>
</div>
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
     
      <div class="carousel-item ">
        <img src="https://www.britishcouncil.org/sites/default/files/janko-ferlic-174927_1920x1080.jpg" class="d-block w-100" alt="..." style="height:550px">
        <div class="carousel-caption d-none d-md-block">
          <h3>Whenever you read a good book, somewhere in the world a door opens to allow in more light.</h3>
          <p></p>
        </div>
      </div>
      <div class="carousel-item active">
        <img src="<?= base_url('access/lib1.jpg');?>" class="d-block w-100" alt="..." style="height:550px">
        <div class="carousel-caption d-none d-md-block">
          <h3>The more that you read, the more things you will know. The more that you learn, the more places you’ll go.</h3>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= base_url('access/lib2.jpg');?>" class="d-block w-100" alt="..." style="height:550px">
        <div class="carousel-caption d-none d-md-block">
          <h3>There is no friend as Loyal as Book</h3>
          <p></p>
        </div>
      </div>
    </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


<!--Service provide-->
<div class="container mt-5 bg-light">
   <div class="row">
       <div class="col-lg-4 "><hr class="bg-danger"></div>
       <div class="col-lg-2 h5">Service Provided</div>
       <div class="col-lg-4"><hr class="bg-danger"></div>
   </div>
    <div class="row mt-3">
        <div class="col-lg-3">
           <a href="" class="card">
               <span class="card-img-top">
                   <img src="http://pluspng.com/img-png/book-png-book-stack-png-image-25686-1024.png" width="100%" alt="">
                </span>
                <span class="card-footer"><p class="h5">Rent-Buy Book</p></span>
           </a>
        </div>
           <div class="col-lg-3">
           <a href="" class="card">
               <span class="card-img-top">
                   <img src="http://www.pngall.com/wp-content/uploads/2016/03/Book-PNG-6.png" width="100%" alt="" height="250px">
                </span>
                <span class="card-footer"><p class="h5">SecondHand Book</p></span>
           </a>
        </div>
           <div class="col-lg-3">
           <a href="" class="card">
               <span class="card-img-top">
                   <img src="https://requestreduce.org/images/book-clipart-stack-13.png" width="100%" alt="" height="250px">
                </span>
                <span class="card-footer"><p class="h5">Sell Book Book</p></span>
           </a>
            
        </div>
           <div class="col-lg-3">
           <a href="" class="card">
               <span class="card-img-top">
                   <img src="<?= base_url('access/acd.jpg');?>" width="100%" alt="" height="250px">
                </span>
                <span class="card-footer"><p class="h5">Academic Book</p></span>
           </a>
            
        </div>
    </div>
    </div>
    <div class="container mt-4">

      <p class="h3">Deals of a Day</p>
      <hr>
        <div class="row mt-4">
            <?php foreach ($display as $d):?>
            <div class="col-lg-3 mt-3">
                <div class="card shadow">
                            <a href="<?= base_url('user/view_book/'.$d->id);?>" class="card-img-top">
                                <img src="<?= base_url('access/'.$d->image);?>" width="100%" style="height: 280px" alt="">
                            </a>
                                <div class="card-body">
                                    <a href="<?= base_url('user/view_book/'.$d->id);?>" class="h5 m-0 p-0"><?= $d->title;?></a>
                                    <p class="text-muted  p-0" style="float: right"><?= $d->author;?></p>
                                    <div class="text-danger mt-3 p-0 h6" style="font-size: 22px">Rs.<?= $d->price;?></div>
                                    <div class="text-danger mt-n4 p-0 h6" style="font-size: 18px;
                                    margin-left: 70%; margin-top: 10%;"><del>Rs.<?= $d->oldprice;?></del>
                                    </div>
                                    <a href="" class="btn btn-outline-primary ml-4"><i class="fas fa-cart-plus"></i> Add On Cart</a>
                                </div>
                                </div>

                </div>
            <?php endforeach;?>
        </div>
    
</div>

</body>
</html>