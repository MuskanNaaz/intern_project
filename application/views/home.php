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
                 <a href="<?= base_url('admin/home');?>" class="list-group-item list-group-item-action active"><i class="fas fa-align-right text-danger"></i> DashBoard</a>
                  <a href="<?= base_url('admin/course');?>" class="list-group-item list-group-item-action"><i class="fas fa-book-reader text-danger"></i>  Courses</a>
                   <a href="<?= base_url('admin/question');?>" class="list-group-item list-group-item-action "><i class="fab fa-accusoft text-danger"> </i> InsertQuestion</a>
                </ul> 
            </div>
            <div class="col-lg-9">
                <p class="text-muted h5">DashBoard</p>
                <hr>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card shadow   bg-primary">
                    <div class="card-body h2 text-light">
                        Total Courses:
                    </div>
                </div>
                    </div>
                       <div class="col-lg-4">
                        <div class="card shadow  bg-primary">
                    <div class="card-body text-light  h2">
                        Total MockTest:
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>