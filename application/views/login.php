<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-secondary">
   <div class="container mt-3">
       <div class="row">
           <div class="col-lg-4 mx-auto">
               <div class="card bg-light shadow">
                   <div class="card-body">
                       <?= form_open('admin/index');?>
                       <div class="form-group">
                       <label>Email</label>
                       <input type="text" name= email class="form-control" >
                       </div>
                       <div class="form-group">
                           <label for="">Password</label>
                           <input type="password"  name="password" class="form-control">
                       </div>
                       <div class="form-group">
                           <input type="submit" class="btn btn-success form-group">
                       </div>
                       <?= form_close();?>
                   </div>
               </div>
           </div>
       </div>
   </div> 
</body>
</html>