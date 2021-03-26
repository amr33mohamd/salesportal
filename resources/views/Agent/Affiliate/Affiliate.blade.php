@extends('Agent.Layout.App')
@section('title', 'Referals')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
.select2-container--default .select2-selection--single{
  height: 45px !important;
  border: 1px solid #70707030;
}


</style>
<main class="pb-3">
    <!-- Page Title and Breadcrumb Start -->
    <div class="page-title-breadcrumb my-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="page-title">
                        Referals
                    </div>
                </div>
                <div class="col-auto">
                    <div class="breadcrumb-box">
                        <ul>
                            <li>Marketing</li>
                            <li>Social</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Table Section Start -->
    <div class="admin-table">
        <div class="container-fluid">
            <div class="row admin-table-header">
                <div class="col admin-table-filter-box">
                    <div class="admin-table-filter d-flex justify-content-end align-items-center">
                        <div class="card-box w-auto d-flex justify-content-end align-items-center p-2 mb-3">
                            <button class="admin-table-btn mr-3"><img class="mr-2"
                                src="./assets/images/table-export.svg">Export</button>
                            <a href="./step-1.html" class="admin-table-btn"><img class="mr-2"
                                src="./assets/images/table-import.svg">Import</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title and Breadcrumb End -->
    <div class="referal">
        <div class="container-fluid overflow-auto position-relative">
            <div class="d-inline-flex">
                <div class="referal-ul">
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="referal-line-ul">
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <div class="bottom"></div>
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <div class="top"></div>
                        <!-- <div class="left"></div> -->
                        <div class="right"></div>
                        <div class="bottom"></div>
                    </div>
                    <div class="line mb-3">
                        <div class="top"></div>
                        <!-- <div class="left"></div> -->
                        <div class="right"></div>
                        <div class="bottom"></div>
                    </div>
                    <div class="line mb-3">
                        <div class="top"></div>
                        <!-- <div class="left"></div> -->
                        <div class="right"></div>
                        <div class="bottom"></div>
                    </div>
                    <div class="line mb-3">
                        <div class="top"></div>
                        <!-- <div class="left"></div> -->
                        <div class="right"></div>
                        <div class="bottom"></div>
                    </div>
                    <div class="line mb-3">
                        <div class="top"></div>
                        <!-- <div class="left"></div> -->
                        <div class="right"></div>
                        <div class="bottom"></div>
                    </div>
                    <div class="line mb-3">
                        <div class="top"></div>
                        <!-- <div class="left"></div> -->
                        <div class="right"></div>
                        <div class="bottom"></div>
                    </div>
                    <div class="line mb-3">
                        <div class="top"></div>
                        <!-- <div class="left"></div> -->
                        <div class="right"></div>
                        <div class="bottom"></div>
                    </div>
                    <div class="line mb-3">
                        <div class="top"></div>
                        <!-- <div class="left"></div> -->
                        <div class="right"></div>
                        <div class="bottom"></div>
                    </div>
                    <div class="line mb-3">
                        <div class="top"></div>
                        <!-- <div class="left"></div> -->
                        <div class="right"></div>
                        <div class="bottom"></div>
                    </div>
                    <div class="line mb-3">
                        <div class="top"></div>
                        <!-- <div class="left"></div> -->
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                    </div>
                </div>
                <div class="referal-ul">
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="referal-line-ul">
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                </div>
                <div class="referal-ul">
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="referal-line-ul">
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                </div>
                <div class="referal-ul">
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="referal-line-ul">
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                </div>
                <div class="referal-ul">
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="referal-line-ul">
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                </div>
                <div class="referal-ul">
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="referal-line-ul">
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                    <div class="line mb-3">
                        <!-- <div class="top"></div> -->
                        <div class="left"></div>
                        <div class="right"></div>
                        <!-- <div class="bottom"></div> -->
                        <div class="number">10</div>
                    </div>
                </div>
                <div class="referal-ul">
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box mb-3">
                        <div class="referal-box">
                            <div class="referal-header p-2">
                                <div class="referal-image">A</div>
                                <div class="referal-text">
                                    <h3>Admin</h3>
                                    <h4>admin@icigai.com</h4>
                                </div>
                            </div>
                            <div class="referal-body">
                                <div class="referal-item-box">
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Department:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Designation:</div>
                                        <div class="referal-item-text"><span>CEO</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Manager:</div>
                                        <div class="referal-item-text"><span>Self</span></div>
                                    </div>
                                    <div class="referal-item p-2">
                                        <div class="referal-item-title">Location:</div>
                                        <div class="referal-item-text"><span>U.A.E</span></div>
                                    </div>
                                </div>
                                <div class="referal-number-box">
                                    <div class="referal-number-item p-2">
                                        123
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $55,478
                                    </div>
                                    <div class="referal-number-item p-2">
                                        $12,478
                                    </div>
                                </div>
                                <div class="d-flex p-2">
                                    <a href="#" class="btn-admin-primary w-100">Profile information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="zoom-box">
                <button class="btn-primary-admin rounded-circle"><img src="./assets/images/referal-zoom-in.svg"></button>
                <button class="btn-danger-admin rounded-circle"><img src="./assets/images/referal-zoom-out.svg"></button>
            </div>
        </div>
    </div>
</main>
@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script>

$(document).ready(function() {
$('#element').toast('show')
// Setup - add a text input to each footer cell
$('#example thead tr').clone(true).appendTo( '#example thead' );
$('#example thead tr:eq(1) th').each( function (i) {
    if(i != 0){
    var title = $(this).text();
    $(this).html( '<input type="text"  class="form-control filter" placeholder="Search '+title+'" />' );

    $( 'input', this ).on( 'keyup change', function () {
        if ( table.column(i).search() !== this.value ) {
            table
                .column(i)
                .search( this.value )
                .draw();
        }
    } );
  }
  else{
    $(this).html( '');
  }
} );



$('#myInputTextField').on('keyup change',()=>{
  console.log($('#myInputTextField').val())
      table.search(''+$('#myInputTextField').val()).draw() ;
})

$(".filter").hide(); // hidden search input

$("#filter").click(()=>{
$('.filter').toggle(
  function () {
    $(".filter").css({display: "none !important"});
}, function () {

    $(".filter").css({display: "block !important"});
});
})




var table = $('#example').DataTable( {
    orderCellsTop: true,
    fixedHeader: false,
    searching:true
} );

} );

const app = new Vue({
    el: '#app',

    data() {
      return {
        leads: {!! json_encode($leads) !!},
        editing:0,
        current_lead:{},

      }
    },

    created() {
      // console.log(JSON.stringify(this.leads[0]))
      $('#schedule-a-call').on('hidden.bs.modal', function (e) {
        app.editing = 0;
        app.current_lead = {};
      })
      $('#schedule-a-call').on('show.bs.modal', function (e) {
        $('.form-field__input').each(function() {
          if ($(this).val() != ""  ) {
            $(this).parent().parent().addClass('form-field--is-active');
          }
          else {
            $(this).parent().parent().removeClass('form-field--is-active');
          }
        });
      })
      $('#callForm').ajaxForm((response)=> {
        if(app.editing == 1){
          app.editLead(response);
          app.editing = 0;
          console.log(response)
          $('#schedule-a-call').modal('hide');
        }
        else {
          app.addLead(response);
          $('#schedule-a-call').modal('hide');
        }
                 // alert(JSON.stringify(response))
             });
    },

    methods: {
        setLead(lead) {
          this.current_lead = lead;
          this.editing = 1;
           },
           addLead(lead){
             this.leads.push(lead);
           },
           editLead(data) {

             let obj = app.leads.find(f=>f.id==data.id);
              if(obj){
                obj.agenda = data.agenda;
                obj.call_type = data.call_type;
                obj.callable = data.callable;
                obj.callable_id = data.callable_id;
                obj.callable_type = data.callable_type;
                obj.created_at = data.created_at;
                obj.id = data.id;
                obj.purpose = data.purpose;
                obj.related_to = data.related_to;
                obj.reminder = data.reminder;
                obj.sales_stage_id = data.sales_stage_id;
                obj.start = data.start;
                obj.status = data.status;
                obj.subject = data.subject;


              }
              },


        addMessage(message) {
            axios.post('/messages', {
                message
            }).then(response => {
                this.messages.push({
                    message: response.data.message.message,
                    user: response.data.user
                });
            });
        },

        sendMessage() {
            this.addMessage(this.newMessage);
            this.newMessage = '';
        }
    }
});
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
$('.form-field__input').each(function() {
  if ($(this).val() != ""  ) {
    $(this).parent().parent().addClass('form-field--is-active');
  }
  else {
    $(this).parent().parent().removeClass('form-field--is-active');
  }
});
</script>
@endpush
