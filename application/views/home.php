<div class="contenido" style="padding-top: calc(70px + 15px);">
  <!--  Owl carousel -->
  <div class="owl-carousel counter-carousel owl-theme">
    <div class="item">
      <div class="card border-0 zoom-in bg-light-primary shadow-none">
        <div class="card-body">
          <div class="text-center">
            <center>
              <img src="<?= base_url() ?>assets/img/home/icons/doc.png" width="70" height="50" class="mb-3" alt="" />
            </center>
            <p class="fw-semibold fs-3 text-primary mb-1"> Empleados </p>
            <h5 class="fw-semibold text-primary mb-0">10</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card border-0 zoom-in bg-light-warning shadow-none">
        <div class="card-body">
          <div class="text-center">
            <center>
              <img src="<?= base_url() ?>assets/img/home/icons/user.png" width="70" height="50" class="mb-3" alt="" />
            </center>
            <p class="fw-semibold fs-3 text-warning mb-1">Clientes</p>
            <h5 class="fw-semibold text-warning mb-0">2,650</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card border-0 zoom-in bg-light-info shadow-none">
        <div class="card-body">
          <div class="text-center">
            <center>
              <img src="<?= base_url() ?>assets/img/home/icons/vets.png" width="70" height="50" class="mb-3" alt="" />
            </center>
            <p class="fw-semibold fs-3 text-info mb-1">Empresas</p>
            <h5 class="fw-semibold text-info mb-0">356</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card border-0 zoom-in bg-light-danger shadow-none">
        <div class="card-body">
          <div class="text-center">
            <center>
              <img src="<?= base_url() ?>assets/img/home/icons/dog.png" width="70" height="50" class="mb-3" alt="" />
            </center>
            <p class="fw-semibold fs-3 text-danger mb-1">Animales</p>
            <h5 class="fw-semibold text-danger mb-0">4,685</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="card border-0 zoom-in bg-light-success shadow-none">
        <div class="card-body">
          <div class="text-center">
            <center>
              <img src="<?= base_url() ?>assets/img/home/icons/ganancias.png" width="70" height="50" class="mb-3"
                alt="" />
            </center>
            <p class="fw-semibold fs-3 text-success mb-1">Ganancias</p>
            <h5 class="fw-semibold text-success mb-0">$96k</h5>
          </div>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="card border-0 zoom-in bg-light-info shadow-none">
        <div class="card-body">
          <div class="text-center">
            <center> <img src="<?= base_url() ?>assets/img/home/icons/ticket.png" width="70" height="50" class="mb-3"
                alt="" />
            </center>
            <p class="fw-semibold fs-3 text-info mb-1">Tickets</p>
            <h5 class="fw-semibold text-info mb-0">10</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  Row 1 -->
  <div class="row">
    <div class="col-lg-8 d-flex align-items-strech">
      <div class="card w-100">
        <div class="card-body">
          <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
            <div class="mb-3 mb-sm-0">
              <h5 class="card-title fw-semibold">Reporte Mensual</h5>
            </div>
            <div>
              <select class="form-select">
                <option value="1">Agosto 2023</option>
                <option value="2">April 2023</option>
                <option value="3">May 2023</option>
                <option value="4">June 2023</option>
              </select>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-lg-8 col-md-8">
              <div id="chart"></div>
            </div>
            <div class="col-lg-4 col-md-4">
              <div class="d-flex align-items-center mb-4 pb-1">
                <div class="p-8 bg-light-primary rounded-1 me-3 d-flex align-items-center justify-content-center">
                  <i class="ti ti-grid-dots text-primary fs-6"></i>
                </div>
                <div>
                  <h4 class="mb-0 fs-7 fw-semibold">$63,489.50</h4>
                  <p class="fs-3 mb-0">Total Ganancias</p>
                </div>
              </div>
              <div>
                <div class="d-flex align-items-baseline mb-4">
                  <span class="round-8 bg-primary rounded-circle me-6"></span>
                  <div>
                    <p class="fs-3 mb-1">Ganancias</p>
                    <!-- <h6 class="fs-5 fw-semibold mb-0">$48,820</h6> -->
                  </div>
                </div>
                <div class="d-flex align-items-baseline mb-4 pb-1">
                  <span class="round-8 bg-secondary rounded-circle me-6"></span>
                  <div>
                    <p class="fs-3 mb-1">Pagos</p>
                    <!-- <h6 class="fs-5 fw-semibold mb-0">$26,498</h6> -->
                  </div>
                </div>
                <div>
                  <button class="btn btn-primary w-100">Ver reporte completo</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="row">
        <div class="col-lg-12 col-md-6 col-sm-12">
          <!-- Yearly Breakup -->
          <div class="card overflow-hidden">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-8">
                  <h5 class="card-title mb-9 fw-semibold">Encuenta Satifacciòn</h5>
                  <div class="d-flex align-items-center mb-3">
                    <span
                      class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                      <i class="ti ti-arrow-up-left text-success"></i>
                    </span>
                    <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                    <p class="fs-3 mb-0">Ultimo mes</p>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="me-4">
                      <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                      <span class="fs-2">Satisfecho</span>
                    </div>
                    <div>
                      <span class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                      <span class="fs-2">Insatisfecho</span>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="d-flex justify-content-center">
                    <div id="breakup"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  Row 2 -->
  <div class="row">

    <!-- Project -->
    <div class="col-lg-8">
      <div class="row">
        <!-- Customers -->
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body pb-0 mb-xxl-4 pb-1">
              <p class="mb-1 fs-3">Usuarios</p>
              <h4 class="fw-semibold fs-7">36,358</h4>
              <div class="d-flex align-items-center mb-3">
                <span
                  class="me-2 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                  <i class="ti ti-arrow-up-right text-success"></i>
                </span>
                <p class="text-dark fs-3 mb-0">+25%</p>
              </div>
            </div>
            <div id="customers"></div>
          </div>
        </div>
        <!-- Projects -->
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <p class="mb-1 fs-3">Ganancias Mes</p>
              <h4 class="fw-semibold fs-7">$63,489.50</h4>
              <div class="d-flex align-items-center mb-3">
                <span
                  class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                  <i class="ti ti-arrow-up-left text-success"></i>
                </span>
                <p class="text-dark fs-3 mb-0">+9%</p>
              </div>
              <div id="projects"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Comming Soon -->
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center mb-7 pb-2">
            <div class="me-3 pe-1">
              <img src="<?= base_url() ?>assets\img\home\user-5.jpg" class="shadow-warning rounded-2" alt="" width="72"
                height="72" />
            </div>
            <div>
              <h5 class="fw-semibold fs-5 mb-2">Notas Globales</h5>
              <p class="fs-3 mb-0">Agosto, 2023</p>
            </div>
          </div>
          <div class="d-flex justify-content-between">
            <ul class="hstack mb-0">
              <li class="ms-n8" style="margin:15px;">
                <h5>No hay notas Globales</h5>
              </li>
            </ul>
            <a href="#" class="bg-light rounded py-1 px-8 d-flex align-items-center text-decoration-none">
              <i class="ti ti-message-2 fs-6 text-primary"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Selling Products -->
    <div class="col-lg-4 d-flex align-items-strech">
      <div class="card bg-primary border-0 w-100">
        <div class="card-body pb-0">
          <h5 class="fw-semibold mb-1 text-white card-title"> Capital Empresas </h5>
          <p class="fs-3 mb-3 text-white">2023</p>
          <div class="text-center mt-3">
            <img src="<?= base_url() ?>assets\img\home\icons\marranito.png" class="img-fluid" alt="" />

          </div>
        </div>
        <div class="card mx-2 mb-2 mt-n2">
          <div class="card-body">
            <div class="mb-7 pb-1">
              <div class="d-flex justify-content-between align-items-center mb-6">
                <div>
                  <h6 class="mb-1 fs-4 fw-semibold">Marketing</h6>
                  <p class="fs-3 mb-0">$23,568</p>
                </div>
                <div>
                  <span class="badge bg-light-primary text-primary fw-semibold fs-3">55%</span>
                </div>
              </div>
              <div class="progress bg-light-primary" style="height: 4px;">
                <div class="progress-bar w-50" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                  aria-valuemax="100"></div>
              </div>
            </div>
            <div>
              <div class="d-flex justify-content-between align-items-center mb-6">
                <div>
                  <h6 class="mb-1 fs-4 fw-semibold">Intereses</h6>
                  <p class="fs-3 mb-0">$23,568</p>
                </div>
                <div>
                  <span class="badge bg-light-secondary text-secondary fw-bold fs-3">20%</span>
                </div>
              </div>
              <div class="progress bg-light-secondary" style="height: 4px;">
                <div class="progress-bar bg-secondary w-25" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                  aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--  Row 3 -->
  <div class="row">
    <!--  TICKET-->
    <div class="col-lg-12 d-flex align-items-strech">
      <div class="card w-100">
        <div class="card-body">
          <div class="d-sm-flex d-block align-items-center justify-content-between mb-7">
            <div class="mb-3 mb-sm-0">
              <h5 class="card-title fw-semibold">Ticket Empresa</h5>
              <p class="card-subtitle mb-0">Siempre dando soporte</p>
            </div>
            <div>
              <select class="form-select">
                <option value="1">Agosto 2023</option>
                <option value="2">April 2023</option>
                <option value="3">May 2023</option>
                <option value="4">June 2023</option>
              </select>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table align-middle text-nowrap mb-0">
              <thead>
                <tr class="text-muted fw-semibold">
                  <th scope="col" class="ps-0">Empresa</th>
                  <th scope="col">Titulo</th>
                  <th scope="col">Prioridad</th>
                  <th scope="col">Operaciòn</th>
                </tr>
              </thead>
              <tbody class="border-top">
                <tr>
                  <td class="ps-0">
                    <div class="d-flex align-items-center">
                      <div class="me-2 pe-1">
                        <img src="<?= base_url() ?>assets\img\home\user-5.jpg" class="rounded-circle" width="40"
                          height="40" alt="" />
                      </div>
                      <div>
                        <h6 class="fw-semibold mb-1">Vet Love</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="mb-0 fs-3">Soporte Ventas</p>
                  </td>
                  <td>
                    <span class="badge fw-semibold py-1 w-85 bg-light-primary text-primary">Low</span>
                  </td>
                  <td>
                    <button class="btn btn-primary">responder</button>
                  </td>
                </tr>
                <tr>
                  <td class="ps-0">
                    <div class="d-flex align-items-center">
                      <div class="me-2 pe-1">
                        <img src="<?= base_url() ?>assets\img\home\user-5.jpg" class="rounded-circle" width="40"
                          height="40" alt="" />
                      </div>
                      <div>
                        <h6 class="fw-semibold mb-1">Amor canino</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="mb-0 fs-3">Soporte Agenda</p>
                  </td>
                  <td>
                    <span class="badge fw-semibold py-1 w-85 bg-light-warning text-warning">Medium</span>
                  </td>
                  <td>
                    <button class="btn btn-primary">responder</button>
                  </td>
                </tr>
                <tr>
                  <td class="ps-0">
                    <div class="d-flex align-items-center">
                      <div class="me-2 pe-1">
                        <img src="<?= base_url() ?>assets\img\home\user-5.jpg" class="rounded-circle" width="40"
                          height="40" alt="" />
                      </div>
                      <div>
                        <h6 class="fw-semibold mb-1">Caninos</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="mb-0 fs-3">Soporte Ventas</p>
                  </td>
                  <td>
                    <span class="badge fw-semibold py-1 w-85 bg-light-info text-info">High</span>
                  </td>
                  <td>
                    <button class="btn btn-primary">responder</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>