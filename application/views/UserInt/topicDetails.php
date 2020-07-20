<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MockTest</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body class="bg-light">
    <navbar class="navbar navbar-expand-lg navbar-light" style="background-color:#1a1919;">
        <div class="navbar-brand text-light"><h4>MockTest Series</h4></div>
        <ul class="ml-auto navbar-nav text-light">
            <li class="nav-item">
                <button type="button" class="btn btn-outline-warning mr-3" data-toggle="modal" data-target="#login">
                  LogOut
                </button>
            </li>
        </ul>
    </navbar>
    <div class="container-fluide mt-3 ml-1">
        <div class="row">
            <div class="col-lg-3">
                <div class="list-group">
                  <a href="#" class="list-group-item list-group-item-action disabled active" tabindex="-1" aria-disabled="true">Category</a>
                  <?php foreach($cat as $i):?>
                  <a href="<?= base_url('user/topicDetails/'.$i->topic_title);?>" class="list-group-item list-group-item-action "><?= $i->topic_title;?></a>
                  <?php endforeach;?>
                </div>
            </div>
            <div class="col-lg-9">
               <?php foreach($topic as $p):?>
                <div class="card">

                      <ul class="ml-auto">
                          <?= anchor_popup('user/questionInt/'.$p->topic_title.$p->cat_id,'Take Test',['class'=>"badge badge-pill-rounded bg-danger p-2 text-light m-3"]);?>
                      </ul>
                   
                    <div class="card-body">
                    <?= $p->topic_desc;?>
                    </div>
                    </div>
                    <?php endforeach;?>
            </div>
        </div>
    </div>
    </body>
</html>
