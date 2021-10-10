

<body>



<?php $this->load->view('Lista/coluna'); ?>


        <main class="content">

    <?php $this->load->view('Lista/lateralenf'); ?>

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">

                <div class="btn-toolbar dropdown">
                    <a class="btn btn-dark btn-sm me-2 " href="novopaciente">
                        <span class="fas fa-plus me-2"></span> Novo
                    </a>
                </div>

            </div>
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h2">Pacientes Cadastrados</h1>

                </div>

            </div>
            <div class="row justify-content-md-center">
                <div class="col-12 mb-4">
                  <div class="card border-light shadow-sm mb-4">
                      <div class="card-body">
                          <div class="table-responsive">
                            <table class="table table-flush" id="datatable-buttons3">
    <thead class="thead-light">

      <tr><td style="font-weight: bold;">NOME</td><td style="font-weight: bold;">DATA DE NASCIMENTO</td><td style="font-weight: bold;">GENERO</td>
        <td style="font-weight: bold;">POSSUI DOCUMENTO</td><td style="font-weight: bold;">IDADE</td><td style="font-weight: bold;">RG</td>
        <td style="font-weight: bold;">CPF</td><td style="font-weight: bold;">BENEFICIO</td><td style="font-weight: bold;">MUN. NASCIMENTO</td>
</tr>

    </thead>

<tbody>
<?php
foreach ($prod as $lu):
?>
<tr>
<td><?php echo $lu->nome; ?></td>
<td><?php echo $lu->data; ?></td>
<td><?php echo $lu->genero; ?></td>
<td><?php echo $lu->documento; ?></td>
<td><?php echo $lu->idade; ?></td>
<td><?php echo $lu->rg; ?></td>
<td><?php echo $lu->cpf; ?></td>
<td><?php echo $lu->beneficio; ?></td>
<td><?php echo $lu->munnasc; ?></td>

</tr>
<?php

endforeach;
?>
    </tbody>
  </table>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-4 mb-4">
                    <div class="card border-light shadow-sm">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                    <div class="icon icon-shape icon-md icon-shape-primary rounded me-4 me-sm-0"><span class="fas fa-chart-line"></span></div>
                                    <div class="d-sm-none">
                                        <h2 class="h5">Customers</h2>
                                        <h3 class="mb-1">345,678</h3>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-7 px-xl-0">
                                    <div class="d-none d-sm-block">
                                        <h2 class="h5">Númerto de Pacientes</h2>
                                        <h3 class="mb-1">98</h3>
                                    </div>
                                    <small>01/06/2021<span class="icon icon-small"><span class="fas fa-globe-europe"></span></span> última admissão</small>
                                    <div class="small mt-2">
                                        <span class="fas fa-angle-up text-success"></span>
                                        <span class="text-success fw-bold">xy</span> Admissão no último mês
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-4 mb-4">
                    <div class="card border-light shadow-sm">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                    <div class="icon icon-shape icon-md icon-shape-secondary rounded me-4"><span class="fas fa-cash-register"></span></div>
                                    <div class="d-sm-none">
                                        <h2 class="h5">Revenue</h2>
                                        <h3 class="mb-1">$43,594</h3>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-7 px-xl-0">
                                    <div class="d-none d-sm-block">
                                        <h2 class="h5">Estatistica Indefinida</h2>
                                        <h3 class="mb-1">XYZ</h3>
                                    </div>
                                    <small>Feb 1 - Apr 1,  <span class="icon icon-small"><span class="fas fa-globe-europe"></span></span> Worldwide</small>
                                    <div class="small mt-2">
                                        <span class="fas fa-angle-up text-success"></span>
                                        <span class="text-success fw-bold">28.2%</span> Since last month
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-4 mb-4">
                    <div class="card border-light shadow-sm">
                        <div class="card-body">
                            <div class="row d-block d-xl-flex align-items-center">
                                <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                    <div class="ct-chart-traffic-share ct-golden-section ct-series-a"></div>
                                </div>
                                <div class="col-12 col-xl-7 px-xl-0">
                                    <h2 class="h5 mb-3">Estatistica Indefinida</h2>
                                    <h6 class="fw-normal text-gray"><span class="icon w-20 icon-xs icon-secondary me-1"><span class="fas fa-desktop"></span></span> Desktop <a href="#" class="h6">60%</a></h6>
                                    <h6 class="fw-normal text-gray"><span class="icon w-20 icon-xs icon-primary me-1"><span class="fas fa-mobile-alt"></span></span> Mobile Web <a href="#" class="h6">30%</a></h6>
                                    <h6 class="fw-normal text-gray"><span class="icon w-20 icon-xs icon-tertiary me-1"><span class="fas fa-tablet-alt"></span></span> Tablet Web <a href="#" class="h6">10%</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





<footer class="footer section py-5">
    <div class="row">
        <div class="col-12 col-lg-6 mb-4 mb-lg-0">
            <p class="mb-0 text-center text-xl-left">Copyright © 2021-<span class="current-year"></span> <a
                    class="text-primary fw-normal" href="https://themesberg.com" target="_blank">Flavio e Jonnatha</a></p>
        </div>


    </div>
</footer>
        </main>
        <script>


          </script>
