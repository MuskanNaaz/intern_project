<div class="container">
    <div class="row">
        <div class="col-lg-5 mt-5">
            <div class="card shadow">
                <div class="card-header text-white bg-dark">
                    <div class="card-heading h4">Buyer Login</div>
                </div>
                <div class="card-body bg-light">
                    <form action="<?= base_url('buyer/index');?>" method="post">
                        <div class="form-group">

                            <label  class="m-0 p-0 small control-label">Username</label>

                            <div class="input-group">
                                <div class="input-group-prepend ">
                                    <p class="input-group-text bg-white"><i class="fas fa-user text-dark "></i></p>
                                </div>
                                <input type="text" class="form-control" name="username" placeholder="username"/>
                                <?= form_error('username')?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="m-0 p-0 small control-label">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <p class="input-group-text bg-white"><i class="fas fa-unlock-alt text-dark"></i></p>
                                </div>
                                <input type="password" class="form-control" name="password" placeholder="password">
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
        <div class="col-lg-5 offset-2 mt-5">
            <p class="text-muted h2">New to <i class="text-danger h2">PustakKendre.com</i></p>
            <img src="https://www.infibeam.com/assets/skins/newcommon/images/bootstrap/arrow_curved.png" alt="" style="margin-left: 90%; margin-top: -5%">
            <p class="text-muted h5">New Customers: Sign Up Below</p>
            <form action="<?= base_url('buyer/buyer_create');?>" method="post">
                <div class="collapse " id="collapseExample">
                    <div class="mt-3 bg-light">
                        <div class="form-group">
                            <input type="text" class="form-control" name="newuser" placeholder="UserName" value="<?= set_value('newuser');?>">
                            <?= form_error('newuser');?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="email" value="<?= set_value('email');?>">
                            <?= form_error('email');?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="newpassword" placeholder="password" value="<?= set_value('newpassword');?>">
                            <?= form_error('newpassword');?>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success form-control btn-block" type="submit">
                        </div>
                    </div>
                </div>
                <div class="form-group" style="margin-top: 10%">
                    <button type="button" class="btn btn-info" data-toggle="collapse"
                            data-target="#collapseExample">Create Account</button>
                </div>
            </form>


        </div>
    </div>
</div>