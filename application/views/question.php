<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body style="background-color:#66e5d6">
    <navbar class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="navbar-brand">MockTest Series</div>
    </navbar>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-lg-3" >
               <ul class="list-group list-group-flush">
                 <a href="<?= base_url('admin/home');?>" class="list-group-item list-group-item-action"><i class="fas fa-align-right text-danger"></i> DashBoard</a>
                  <a href="<?= base_url('admin/course');?>" class="list-group-item list-group-item-action"><i class="fas fa-book-reader text-danger"></i>  Courses</a>
                  <a href="<?= base_url('admin/topic');?>" class="list-group-item list-group-item-action"><i class="fas fa-book-reader text-danger"></i>  Topic</a>
                   <a href="<?= base_url('admin/question');?>" class="list-group-item list-group-item-action active"><i class="fab fa-accusoft text-danger"> </i> InsertQuestion</a>
                </ul> 
            </div>
            <div class="col-lg-9">
               <div class="row">
                   <div class="col-lg-8 mx-auto">
                    <div class="card shadow">
                        <div class="card-header">
                            <div class="card-heading"></div>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('admin/question');?>" method="post">
                          <div class="form-group">
                             <label for="">Select Course:</label>
                              <select name="cat_id" id="" class="form-control">
                                 <?php  foreach($course as $o):?>
                                  <option value="<?= $o->course;?>"><?= $o->course;?></option>
                                  <?php endforeach;?>
                              </select>
                          </div>
                            <div class="form-group">
                             <label for="">Select Topic:</label>
                              <select name="topic_id" id="" class="form-control">
                                 <?php  foreach($topic as $o):?>
                                  <option value="<?= $o->topic_title;?>"><?= $o->topic_title;?></option>
                                  <?php endforeach;?>
                              </select>
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" name="title" placeholder="Title">
                          </div>
                             <div class="form-group">
                              <input type="text" class="form-control" name="opt1" placeholder="opt1">
                          </div>
                             <div class="form-group">
                              <input type="text" class="form-control" name="opt2" placeholder="opt2">
                          </div>
                             <div class="form-group">
                              <input type="text" class="form-control" name="opt3" placeholder="opt3">
                          </div>
                             <div class="form-group">
                              <input type="text" class="form-control" name="opt4" placeholder="opt4">
                          </div>
                             <div class="form-group">
                             <label for="">Answer</label>
                              <div class="row">
                                  <div class="col-lg-6">
                                      <input type="radio" class="" name="ans" placeholder="ans" value="A">A
                                  </div>
                                  <div class="col-lg-6"><input type="radio" class="" name="ans" placeholder="ans" value="B">B</div>
                              </div>
                                 <div class="row">
                                  <div class="col-lg-6">
                                      <input type="radio" class="" name="ans" value="C" placeholder="ans">C
                                  </div>
                                  <div class="col-lg-6"><input type="radio" class="" name="ans"  value="D" placeholder="ans">D</div>
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
        </div>
    </div>
    </body>
</html>