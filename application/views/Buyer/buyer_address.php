
<div class="row">

    <div class="col-lg-6 offset-2">
        <div class="container mt-3">
    <p class="text-dark h3">Add a new address</p>
    <form action="<?= base_url('buyer/buyer_address');?>" method="post" >
                <div class="form-group">
                    <label>Country/Region</label>
                    <select name="country" id="" class="form-control">
                        <option>India</option>
                        <option >Us</option>
                    </select>
                    <?= form_error('country');?>
                </div>
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control" name="name" value="<?= set_value('');?>">
                    <?= form_error('name');?>
                </div>
                <div class="form-group">
                    <label>Mobile number</label>
                    <input type="text" class="form-control" name="mobile" id="mobile"  maxlength="10" onkeyup="phone(this.value)" value="<?= set_value('mobile');?>"
                           placeholder="10-digit mobile number without prefixes">
                    <?= form_error('mobile');?>
                </div>
                <div class="form-group">
                    <label>Pincode</label>
                    <input type="text" class="form-control" name="pincode" id="pincode"  maxlength="6" onkeyup="pincode1(this.value)" value="<?= set_value('pincode');?>"
                    placeholder="6-digit pincode">
                    <?= form_error('pincode');?>
                </div>
                <div class="form-group">
                    <label>Street Address</label>
                    <input type="text" class="form-control" name="street1" value="<?= set_value('street1');?>">
                    <?= form_error('street1');?>
                    <input type="text" class="form-control mt-2" name="street2" value="<?= set_value('street2');?>">
                    <?= form_error('street2');?>
                </div>
                <div class="form-group">
                    <label>Landmark</label>
                    <input type="text" class="form-control" name="landmark" value="<?= set_value('landmark');?>"
                    placeholder="E.g.Near Kaali Flour Mill,Behind School,etc">
                    <?= form_error('landmark');?>
                    
        </div>
                <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control" name="city" value="<?= set_value('state');?>">
                    <?= form_error('city');?>
                </div>
                <div class="form-group">
                    <label for="">State</label>
                    <select name="state" id="" class="form-control">
                        <option>Select State</option>
                        <option>Bihar</option>
                        <option>Ranchi</option>
                        <option>Goa</option>
                        <?= form_error('state');?>
                    </select>
                    
                </div>
        <div class="form-group">
            <input type="submit" class="btn btn-hover btn-success ml-5">
        </div>
        <?= $this->session->flashdata('success');?>
            </form>
        </div>
    </div>
</div>

<script>
    function phone(value) {
        var length = value.length;
        var data = document.getElementById("mobile");
        if(length==10){
            data.classList.add("is-valid");
            data.classList.remove("is-invalid");

        }
        else{
            data.classList.add("is-invalid");
            data.classList.remove("is-valid");
        }
        var fno=value.substr(0,1);
        if(Number(fno)<6){
            data.classList.add("is-invalid");
            data.classList.remove("is-valid");

            data.focus();
        }
        else{
            data.classList.add("is-valid");
            data.classList.remove("is-invalid");
        }

    }
    function pincode1(value) {
        var length = value.length;
        var data = document.getElementById("pincode");
        if (length == 6) {
            data.classList.add("is-valid");
            data.classList.remove("is-invalid");

        } else {
            data.classList.add("is-invalid");
            data.classList.remove("is-valid");
        }
    }
</script>