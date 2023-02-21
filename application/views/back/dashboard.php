<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <h1>DASHBOARD</h1>
            </div>
        </div>
        <div class="alert alert-success"> Selamat Datang <b> <?= $this->session->username; ?> </b> </div>
    </div>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-1">
                    <div class="card-body">
                        <h3 class="card-title text-white">Ticket Created
                        </h3>
                        <div class="d-inline-block">
                            <h2 class="text-white"></h2>
                            <p class="text-white mb-0"></p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-ticket"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-2">
                    <div class="card-body">
                        <h3 class="card-title text-white">Ticket Pending</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white"></h2>
                            <p class="text-white mb-0"></p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-3">
                    <div class="card-body">
                        <h3 class="card-title text-white">Ticket Resolved</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white"></h2>
                            <p class="text-white mb-0"></p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-lock"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-4">
                    <div class="card-body">
                        <h3 class="card-title text-white">Ticket Reopened</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white"></h2>
                            <p class="text-white mb-0"></p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
<!--**********************************

            Content body end
        ***********************************-->
