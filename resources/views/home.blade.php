@extends('layouts.app')

@section('content')
<div class="row g-0">
  <div class="col-lg-6 pe-lg-2 mb-3">
    <div class="card h-lg-100 overflow-hidden">
      <div class="card-header bg-light">
        <div class="row align-items-center">
          <div class="col">
            <h6 class="mb-0">Dashboard</h6>
          </div>
          <div class="col-auto text-center pe-card"><select class="form-select form-select-sm">
              <option>Working Time</option>
              <option>Estimated Time</option>
              <option>Billable Time</option>
            </select></div>
        </div>
      </div>
      <div class="card-body p-0">
        <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
          <div class="col ps-card py-1 position-static">
            <div class="d-flex align-items-center">
              <div class="avatar avatar-xl me-3">
                <div class="avatar-name rounded-circle bg-soft-primary text-dark"><span class="fs-0 text-primary">F</span></div>
              </div>
              <div class="flex-1">
                <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="index.html#!">Falcon</a><span class="badge rounded-pill ms-2 bg-200 text-primary">38%</span></h6>
              </div>
            </div>
          </div>
          <div class="col py-1">
            <div class="row flex-end-center g-0">
              <div class="col-auto pe-2">
                <div class="fs--1 fw-semi-bold">12:50:00</div>
              </div>
              <div class="col-5 pe-card ps-2">
                <div class="progress bg-200 me-2" style="height: 5px;">
                  <div class="progress-bar rounded-pill" role="progressbar" style="width: 38%" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
          <div class="col ps-card py-1 position-static">
            <div class="d-flex align-items-center">
              <div class="avatar avatar-xl me-3">
                <div class="avatar-name rounded-circle bg-soft-success text-dark"><span class="fs-0 text-success">R</span></div>
              </div>
              <div class="flex-1">
                <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="index.html#!">Reign</a><span class="badge rounded-pill ms-2 bg-200 text-primary">79%</span></h6>
              </div>
            </div>
          </div>
          <div class="col py-1">
            <div class="row flex-end-center g-0">
              <div class="col-auto pe-2">
                <div class="fs--1 fw-semi-bold">25:20:00</div>
              </div>
              <div class="col-5 pe-card ps-2">
                <div class="progress bg-200 me-2" style="height: 5px;">
                  <div class="progress-bar rounded-pill" role="progressbar" style="width: 79%" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
          <div class="col ps-card py-1 position-static">
            <div class="d-flex align-items-center">
              <div class="avatar avatar-xl me-3">
                <div class="avatar-name rounded-circle bg-soft-info text-dark"><span class="fs-0 text-info">B</span></div>
              </div>
              <div class="flex-1">
                <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="index.html#!">Boots4</a><span class="badge rounded-pill ms-2 bg-200 text-primary">90%</span></h6>
              </div>
            </div>
          </div>
          <div class="col py-1">
            <div class="row flex-end-center g-0">
              <div class="col-auto pe-2">
                <div class="fs--1 fw-semi-bold">58:20:00</div>
              </div>
              <div class="col-5 pe-card ps-2">
                <div class="progress bg-200 me-2" style="height: 5px;">
                  <div class="progress-bar rounded-pill" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
          <div class="col ps-card py-1 position-static">
            <div class="d-flex align-items-center">
              <div class="avatar avatar-xl me-3">
                <div class="avatar-name rounded-circle bg-soft-warning text-dark"><span class="fs-0 text-warning">R</span></div>
              </div>
              <div class="flex-1">
                <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="index.html#!">Raven</a><span class="badge rounded-pill ms-2 bg-200 text-primary">40%</span></h6>
              </div>
            </div>
          </div>
          <div class="col py-1">
            <div class="row flex-end-center g-0">
              <div class="col-auto pe-2">
                <div class="fs--1 fw-semi-bold">21:20:00</div>
              </div>
              <div class="col-5 pe-card ps-2">
                <div class="progress bg-200 me-2" style="height: 5px;">
                  <div class="progress-bar rounded-pill" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-0 align-items-center py-2 position-relative">
          <div class="col ps-card py-1 position-static">
            <div class="d-flex align-items-center">
              <div class="avatar avatar-xl me-3">
                <div class="avatar-name rounded-circle bg-soft-danger text-dark"><span class="fs-0 text-danger">S</span></div>
              </div>
              <div class="flex-1">
                <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="index.html#!">Slick</a><span class="badge rounded-pill ms-2 bg-200 text-primary">70%</span></h6>
              </div>
            </div>
          </div>
          <div class="col py-1">
            <div class="row flex-end-center g-0">
              <div class="col-auto pe-2">
                <div class="fs--1 fw-semi-bold">31:20:00</div>
              </div>
              <div class="col-5 pe-card ps-2">
                <div class="progress bg-200 me-2" style="height: 5px;">
                  <div class="progress-bar rounded-pill" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block w-100 py-2" href="index.html#!">Show all projects<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
    </div>
  </div>
  <div class="col-lg-6 ps-lg-2 mb-3">
    <div class="card h-lg-100">
      <div class="card-header">
        <div class="row flex-between-center">
          <div class="col-auto">
            <h6 class="mb-0">Total Sales</h6>
          </div>
          <div class="col-auto d-flex"><select class="form-select form-select-sm select-month me-2">
              <option value="0">January</option>
              <option value="1">February</option>
              <option value="2">March</option>
              <option value="3">April</option>
              <option value="4">May</option>
              <option value="5">Jun</option>
              <option value="6">July</option>
              <option value="7">August</option>
              <option value="8">September</option>
              <option value="9">October</option>
              <option value="10">November</option>
              <option value="11">December</option>
            </select>
            <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-total-sales" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-total-sales"><a class="dropdown-item" href="index.html#!">View</a><a class="dropdown-item" href="index.html#!">Export</a>
                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="index.html#!">Remove</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body h-100 pe-0">
        <!-- Find the JS file for the following chart at: src\js\charts\echarts\total-sales.js-->
        <!-- If you are not using gulp based workflow, you can find the transpiled code at: public\assets\js\theme.js-->
        <div class="echart-line-total-sales h-100" data-echart-responsive="true"></div>
      </div>
    </div>
  </div>
</div>
@endsection