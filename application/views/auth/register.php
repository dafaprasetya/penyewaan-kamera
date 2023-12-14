<div class="container mt-5">

    <div class="card">
        <div class="card-header">
            Register
        </div>
        <div class="card-body">
            <form method="POST" action="<?php echo base_url() ?>auth/p_register">
                <div class="form-group mb-3">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Email">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Masukan Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
    
        </div>
    </div>
</div>
