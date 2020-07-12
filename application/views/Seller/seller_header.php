<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PustakKendre</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Shojumaru" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url('access/style.css');?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>


<body>
<nav class="navbar navbar-expand-lg navbar-dark text-white" style="background-color: slateblue">
    <a href="<?= base_url('user/index');?>" class="navbar-brand ml-5">
        <img src="<?= base_url('access/vexels.png');?>" alt="" width="20%">
        <p class="h4 wy-text-warning" style="display:inline;font-family: 'Kaushan Script', cursive;">Pustak Kendre</p></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a href="<?= base_url('seller/index');?>" class="nav-link  h6"  > Home</a>
        </li>
        <li class="nav-item ">
            <a href="<?= base_url('seller/insertbook');?>" class="nav-link  h6">Insert Book</a>
        </li>
        <li class="nav-item ">
            <a href="<?= base_url('seller/seller_manage');?>" class="nav-link  h6">Manage Book</a>
        </li>

        <li class="nav-item ">
            <a href="<?= base_url('seller/seller_contact');?>" class="nav-link  h6">Contact Us</a>
        </li>
        <li class="nav-item ">
            <a href="" class="nav-link  h6">Notification <i class="fas fa-bell"></i> <span class="rst-badge badge-small badge-pill badge-danger">1</span> </a>
        </li>
        <li class="nav-item ">
            <a href="" class="nav-link  h6 mr-5">Log Out</a>
        </li>
        <li class="nav-item ">
            <?php foreach ($info as $i);?>
       <a href="" class="nav-link  h6 mr-5">Hello,<?= $i->username;?></a>
        </li>


    </ul>
    </div>
</nav>

