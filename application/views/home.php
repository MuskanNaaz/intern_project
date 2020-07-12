<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foodie</title>
    <link rel="stylesheet" href="<?= base_url('access/bootstrap.css');?>">
</head>
<body class=" bg-dark">
  <nav class="navbar navbar-expand-lg navbar-dark bg-warning text-white">
      <a href="<?= base_url('user/index');?>" class="navbar-brand"><img src="https://www.mdpi.com/img/journals/foods-logo-print.png" width="20%"></a>
  </nav>
  
     <form action="<?= base_url('user/index');?>" method="post">
  <div class="container-fluid mt-2 text-white">
      <div class="row">
          <div class="col-lg-2"></div>
              <div class="col-lg-6 mt-1">
              
                  <div class="row">
                  <?php foreach($price as $p);?>
                  <div class="col-lg-2">
                      <label for="">Name:-</label>
                  </div>
                  <div class="col-lg-4">
                      <input type="text" class="form-control" name="name" value="<?= set_value('name');?>">
                      <?= form_error('name');?>
                  </div>
                  <div class="col-lg-2">
                      <label for="">Contact</label>
                  </div>
                  <div class="col-lg-4">
                      <input type="text" class="form-control" name="contact" value="<?= set_value('contact');?>">
                      <?= form_error('contact');?>
                  </div>
              </div>
              
              <div class="row">
                  <div class="col-lg-2 mt-1 ">
                      <label for="">Eggroll:-</label>
                  </div>
                  <div class="col-lg-4 mt-1 ">
                      <input type="text" class="form-control" name="eggroll" value="<?= set_value('eggroll');?>">
                      <small class="text-muted">₹ <?= $p->eggroll;?>/roll</small>
                      <?= form_error('eggroll');?>
                  </div>
                  <div class="col-lg-2 mt-1 ">
                      <label for="">Momos</label>
                  </div>
                  <div class="col-lg-4 mt-1 ">
                      <input type="text" class="form-control" name="momos"value="<?= set_value('momos');?>">
                      <small class="text-muted">₹ <?= $p->momos;?>/6pc</small>
                      <?= form_error('momos');?>
                  </div>
              </div>
              <div class="row mt-2">
                  <div class="col-lg-2">
                      <label for="">Sandwitch:-</label>
                  </div>
                  <div class="col-lg-4">
                      <input type="text" class="form-control" name="sandwitch" value="<?= set_value('sandwitch');?>">
                      <small class="text-muted">₹ <?= $p->sandwitch;?>/pc</small>
                      <?= form_error('sandwitch');?>
                  </div>
                  <div class="col-lg-2">
                      <label for="">Pizza</label>
                  </div>
                  <div class="col-lg-4">
                      <input type="text" class="form-control" name="pizza" value="<?= set_value('pizza');?>">
                      <small class="text-muted">₹ <?= $p->pizza;?>/sm</small>
                      <?= form_error('pizza');?>
                  </div>
              </div>
              <div class="row mt-2">
                  <div class="col-lg-2">
                      <label for="">Burger:-</label>
                  </div>
                  <div class="col-lg-4">
                      <input type="text" class="form-control" name="burger" value="<?= set_value('burger');?>">
                      <small class="text-muted"> ₹ <?= $p->burger;?>/bun</small>
                      <?= form_error('burger');?>
                  </div>
                  <div class="col-lg-2">
                      <label for="">Bread</label>
                  </div>
                  <div class="col-lg-4">
                      <input type="text" class="form-control" name="bread" value="<?= set_value('bread');?>">
                      <small class="text-muted">₹ <?= $p->bread;?>/pkt</small>
                      <?= form_error('bread');?>
                  </div>
              </div>
              <hr class="bg-light">
              <div class="row">
                  <div class="col-lg-6">
                      <input type="submit" class="btn btn-outline-success btn-lg" name="send" value="Total">
                  </div>
                  <div class="col-lg-6">
                      <div class="btn btn-outline-danger btn-lg">reset</div>
                  </div>
              </div>
                  
             
          </div>
          <?php
          if(isset($_POST['send'])){
              $eggroll = $_POST['eggroll'] * $p->eggroll;
              $momos = $_POST['momos'] * $p->momos;
              $sandwitch = $_POST['sandwitch'] * $p->sandwitch;
              $pizza = $_POST['pizza'] * $p->pizza;
              $burger = $_POST['burger'] * $p->burger;
              $bread = $_POST['bread'] * $p->bread;
              $total = ($eggroll+ $momos+ $sandwitch+ $pizza+ $burger+ $bread);
              $gst = 0.18*$total;
              $payable = $gst+ $total;
              
          }
          ?>
          <div class="col-lg-2">
              <label for="">total</label>
              <input type="text" class="form-control" name="total" value="<?php if(isset($_POST['send'])){
    echo $total;};?>">
              <?= form_error('total');?>
              <label for="">GST (18%)</label>
              <input type="text" class="form-control" name="gst" value="<?php if(isset($_POST['send'])){
    echo $gst;};?>">
              <?= form_error('gst');?>
              <label for="">Payable </label>
              <input type="text" class="form-control" name="payable" value="<?php if(isset($_POST['send'])){
    echo $payable;};?>">
              <?= form_error('payable');?>
              <hr class="bg-light">
              <input type="submit" class="btn btn-outline-warning btn-lg" value="Order Now" name="order">
              <a href="<?= base_url('user/show');?>" class="btn btn-outline-warning mt-1">View all order</a>
              
          </div>
         </div>
    </div>  
    </form>
</body>
</html>