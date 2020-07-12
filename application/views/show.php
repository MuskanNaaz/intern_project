<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foodie</title>
    <link rel="stylesheet" href="<?= base_url('access/bootstrap.css');?>">
    <link rel="stylesheet" href="<?= base_url('access/style.css');?>">
    
</head>
<body class="">
 
  <nav class="navbar navbar-expand-lg navbar-dark bg-warning text-white">
      <a href="<?= base_url('user/index');?>" class="navbar-brand"><img src="https://www.mdpi.com/img/journals/foods-logo-print.png" width="20%"></a>
  </nav>
   <div class="container-fluid mt-2">
    <div class="row">
        <div class="col-lg-6">
            <div class="card text-white" style="background-color:rgba(33, 31, 31, 0.95)">
                <div class="card-header">
                    <div class="card-heading h4">Your Receipt</div>
                </div>
                
                <div class="card-body">
                   <table class="table">
                       <tr>
                           <th>Id</th>
                           <th>Name</th>
                           <th>Contact</th>
                           <th>Total</th>
                           <th>Tax</th>
                           <th>Payable</th>
                           <th>action</th>
                       </tr>
                   
                    <?php
                    foreach($order as $o):?>
                    <tr>
                     <td><?= $o->id;?></td>
                     <td><?= $o->name;?></td>
                     <td><?= $o->contact;?></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td><a href="<?= base_url('user/delete'.$o->id);?>" class="btn btn-danger btn-sm">del</a></td>
                     <td>
                     <a href="<?= base_url('user/view'.$o->id);?>" class="btn btn-success btn-sm">view</a></td>
                    </tr>
                    <?php endforeach;?></table>
                </div>
            </div>
            
        </div>
    </div>
</div>
    </body>
</html>