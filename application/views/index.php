
<body>

    <main>

        <!-- Section -->
        <section class="d-flex align-items-center my-5 mt-lg-6 mb-lg-5">
            <div class="container">
                <div class="row justify-content-center form-bg-image" data-background-lg="<?php echo base_url('public/assets/img/illustrations/login.svg')?>">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <div class="d-flex justify-content-center my-4">
                                <img src="<?php echo base_url('public/assets\img\ladyreding.png')?>" alt="logo" style="float:right;width:200px;height:200px;">
                           </div>
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h3" style="font-weight:bold;">Acessar Prontuário</h1>
                            </div>
                            <form method="post" action="autenticar" class="mt-4">
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><span class="fas fa-user"></span></span>
                                        <input type="text" class="form-control" placeholder="Usuário" id="email" >
                                    </div>
                                </div>
                                <!-- End of Form -->
                                <div class="form-group">
                                    <!-- Form -->
                                    <div class="form-group mb-4">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2"><span class="fas fa-unlock-alt"></span></span>
                                            <input type="password" placeholder="Senha" class="form-control" id="password" required>
                                        </div>
                                    </div>
                                    <!-- End of Form -->
                                    <div class="d-flex justify-content-between align-items-top mb-4">


                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-dark">Autenticar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
