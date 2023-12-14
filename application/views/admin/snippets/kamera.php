                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                TOTAL KAMERA</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $kamera->num_rows() ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-camera fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Disewakan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $disewa->num_rows() ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-camera fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Tidak Disewakan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $tidakdisewa->num_rows() ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-camera fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>