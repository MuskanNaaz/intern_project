<style>
    .container-fluid{
        background: linear-gradient(rgba(34, 60, 203, 0.95),#d03751,white);
    }
</style>
 
    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-5 mt-5 mx-auto">
        <div class="card shadow">
            <div class="card-header text-white bg-dark">
                <div class="card-heading h4">Seller Login</div>
            </div>
            <div class="card-body bg-light">
                <form action="<?= base_url('admin/index');?>" method="post">
                    <div class="form-group">

                        <label  class="m-0 p-0 small control-label">Username</label>

                        <div class="input-group">
                            <div class="input-group-prepend ">
                                <p class="input-group-text bg-white"><i class="fas fa-user text-dark "></i></p>
                            </div>
                            <input type="text" class="form-control" name="username" placeholder="username" value="<?= set_value('username');?>"/>
                            <?= form_error('username')?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="m-0 p-0 small control-label">Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <p class="input-group-text bg-white"><i class="fas fa-unlock-alt text-dark"></i></p>
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="password" value="<?= set_value('password');?>">
                            <?= form_error('password')?>
                        </div>
                        <a  href="" class="text-primary mt-4 ml-5">Forget Password ???</a>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="send" class="btn btn-dark btn-block" value="Log-In">
                    </div>
                    <?=$this->session->flashdata('success');?>
                    <p class="text-muted">Note: We never post anything without your permission</p>
                </form>
            </div>
        </div>
    </div> 
   