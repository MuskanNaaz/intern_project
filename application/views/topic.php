<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
  <script>tinymce.init({selector:'textarea'});</script>
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
                  <a href="<?= base_url('admin/topic');?>" class="list-group-item list-group-item-action active"><i class="fas fa-book-reader text-danger"></i>  Topic</a>
                   <a href="<?= base_url('admin/question');?>" class="list-group-item list-group-item-action"><i class="fab fa-accusoft text-danger"> </i> InsertQuestion</a>
                </ul> 
            </div>
            <div class="col-lg-9">
            <div class="row">
                    <div class="col-lg-6">
                        <div class="card shadow bg-light">
                            <div class="card-body">
                            <form action="<?= base_url('admin/topic');?>" method="post">
                            <div class="form-group">
                             <label for="">Select Course:</label>
                              <select name="cat_id" id="" class="form-control">
                                 <?php  foreach($course as $o):?>
                                  <option value="<?= $o->course;?>"><?= $o->course;?></option>
                                  <?php endforeach;?>
                              </select>
                          </div>
                            <div class="form-group">
                            <label for="">Topic_title</label>
                            <input type="text" class="form-control" name="topic_title" value="<?= set_value('topic_title');?>">
                            </div>
                            
                            <div class="form-group">
                            <label for="">Topic_desc</label>
                            
                            <textarea class="form-control" name="topic_desc" value="<?= set_value('topic_desc');?>">
                            </textarea>
                                </div>
                            <div class="form-group">
                            <label for="">Topic_Status</label>
                            <select  class="form-control" name="topic_status" value="<?= set_value('topic_status');?>">
                               <option value="0">Deactive</option>
                               <option value="1">Active</option>
                                </select>
                                </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success">
                            </div>
                                
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <table class="table table-hover table-striped">
                            <tr>
                                <th>Id</th>
                                <th>Topic_title</th>
                                <th>Topic_Status</th>
                                <th>Course</th>
                                <th>Action</th>
                            </tr>
                            
                                <?php foreach($topic as $c):?>
                                <tr>
                                <td><?= $c->topic_id;?></td>
                                <td><?= $c->topic_title;?></td>
                                <td><?= $c->topic_status;?></td>
                                <td><?= $c->cat_id;?></td>
                                <td><a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a></td>
                                </tr>
                                <?php endforeach;?>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>