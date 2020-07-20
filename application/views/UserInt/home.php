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
<body>
    <navbar class="navbar navbar-expand-lg navbar-light" style="background-color:rgba(13, 13, 13, 0.95);">
        <div class="navbar-brand text-light ml-3 p-1"><h4>MockTest Series</h4></div>
        <ul class="ml-auto navbar-nav text-light">
            <li class="nav-item">
                <button type="button" class="btn btn-outline-warning mr-5 " data-toggle="modal" data-target="#login">
                  Login
                </button>
            </li>
              <!-- Modal Login-->
            <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title text-primary" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-primary">
                    <form action="<?= base_url('user/login');?>" method="post">
                        <div class="form-group">
                            <label for="">UserName</label>
                            <input type="text" name="username" value="<?= set_value('username');?>" class="form-control">
                        </div>
                           <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" value="<?= set_value('password');?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success">
                        </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
                           <li class="nav-item">
                <button type="button" class="btn btn-outline-warning mr-5" data-toggle="modal" data-target="#register">
                  Register
                </button>
            </li>
            
            <!--Model Registration-->
            
            <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title text-primary" id="exampleModalLabel">Registration</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-primary">
                    <form action="<?= base_url('user/student');?>" method="post">
                        <div class="form-group">
                            <label for="">FirstName</label>
                            <input type="text" name="fname" value="<?= set_value('fname');?>" class="form-control">
                        </div>
                           <div class="form-group">
                            <label for="">LastName</label>
                            <input type="text" name="lname" value="<?= set_value('lname');?>" class="form-control">
                        </div>
                          <div class="form-group">
                            <label for="">UserName</label>
                            <input type="text" name="username" value="<?= set_value('username');?>" class="form-control">
                        </div>
                           <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" value="<?= set_value('password');?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success">
                        </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
        </ul>
    </navbar>
    <div class="container-fluide">
        <img src="https://images5.alphacoders.com/394/thumb-1920-394749.jpg" alt="" width="100%" height="600px">
        <p class="h1 ml-5 text-warning" style="margin-top:-36%">Re-engineering your competitive exams preparation</p>
        <p class="h4 text-warning ml-5">One pass for all your exams | Hand picked questions | 5 levels of feedback</p>
        <br>
        <p class="h5 text-light ml-5">Which Course are you preparing for?</p>
        <div class="row">
            <div class="col-lg-3">
                        <?php foreach($course as $c):?>
                        <a href="<?= base_url('user/topicInt/'.$c->course);?>" class="btn btn-outline-warning p-2 ml-5 mt-3"><?= $c->course;?></a>
                        <?php endforeach;?>
                        <a href="" class="btn btn-outline-warning p-2 ml-5 mt-3">>> More</a>
                    </div>
                </div>
            </div>
</body>
</html>