<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Adzum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <?php include 'partials/head-links.php'; ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- Sidenav Menu Start -->
        <?php include 'partials/sidebar-nav.php'; ?>
    </div>
    <!-- Sidenav Menu End -->


    <!-- Topbar Start -->
    <?php include 'partials/header.php'; ?>
    <!-- Topbar End -->

    <!-- Search Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-transparent">
                <div class="card mb-0 shadow-none">
                    <div class="px-3 py-2 d-flex flex-row align-items-center" id="top-search">
                        <i class="ti ti-search fs-22"></i>
                        <input type="search" class="form-control border-0" id="search-modal-input"
                            placeholder="Search for actions, people,">
                        <button type="button" class="btn p-0" data-bs-dismiss="modal" aria-label="Close">[esc]</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->
    <div class="page-content">
        <div class="page-container">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column">
                        <div class="flex-grow-1">
                            <h4 class="fs-18 text-uppercase fw-bold m-0">Dashboard</h4>
                        </div>

                    </div><!-- end card header -->
                </div>
                <!--end col-->
            </div> <!-- end row-->

            <div class="row">
                <div class="col">
                    <div class="row row-cols-xxl-4 row-cols-md-2 row-cols-1 text-center">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">Ad Spend</h5>
                                    <div class="d-flex align-items-center justify-content-center gap-2 my-2 py-1">
                                        <div class="user-img fs-42 flex-shrink-0">
                                            <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                                <iconify-icon icon="iconoir:reports-solid"></iconify-icon>
                                            </span>
                                        </div>
                                        <h3 class="mb-0 fw-bold">34 000 MAD</h3>
                                    </div>

                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">ROAS</h5>
                                    <div class="d-flex align-items-center justify-content-center gap-2 my-2 py-1">
                                        <div class="user-img fs-42 flex-shrink-0">
                                            <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                                <iconify-icon icon="si:money-fill"></iconify-icon>
                                            </span>
                                        </div>
                                        <h3 class="mb-0 fw-bold">91 000 <small class="text-muted">MAD</small></h3>
                                    </div>

                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">Conversions
                                    </h5>
                                    <div class="d-flex align-items-center justify-content-center gap-2 my-2 py-1">
                                        <div class="user-img fs-42 flex-shrink-0">
                                            <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                                <iconify-icon icon="cuida:bullseye-outline"></iconify-icon>
                                            </span>
                                        </div>
                                        <h3 class="mb-0 fw-bold">23 000 <small class="text-muted">MAD</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted fs-13 text-uppercase" title="Number of Orders">Integrations
                                    </h5>
                                    <div class="d-flex align-items-center justify-content-center gap-2 my-2 py-1">
                                        <div class="user-img fs-42 flex-shrink-0">
                                            <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                                <iconify-icon icon="dashicons:admin-links"></iconify-icon>
                                            </span>
                                        </div>
                                        <h3 class="mb-0 fw-bold">3</h3>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->

                    </div> <!-- end row-->

                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="card">
                                <div class="d-flex card-header justify-content-between align-items-center">
                                    <h4 class="header-title">Latest Campaigns</h4>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-secondary">See all <i
                                            class="ti ti-eye ms-1"></i></a>
                                </div>
                                <div class="card-body p-0">
                                    
                                    <div class="table-responsive">
                                        <table
                                            class="table table-custom table-centered table-sm table-nowrap table-hover mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-md flex-shrink-0 me-2">
                                                                <span
                                                                    class="avatar-title bg-primary-subtle rounded-circle">
                                                                    <img src="../assets/images/products/logo/logo-1.svg"
                                                                        alt="" height="22">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="text-muted fs-12">Clothing</span> <br />
                                                                <h5 class="fs-14 mt-1">Zaroan - Brazil</h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Established</span>
                                                        <h5 class="fs-14 mt-1 fw-normal">Since 2020</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Stores</span> <br />
                                                        <h5 class="fs-14 mt-1 fw-normal">1.5k</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Products</span>
                                                        <h5 class="fs-14 mt-1 fw-normal">8,950</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Status</span>
                                                        <h5 class="fs-14 mt-1 fw-normal"><i
                                                                class="ti ti-circle-filled fs-12 text-success"></i>
                                                            Active</h5>
                                                    </td>
                                                    <td style="width: 30px;">
                                                        <div class="dropdown">
                                                            <a href="#"
                                                                class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti ti-dots-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item">Refresh Report</a>
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item">Export Report</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-md flex-shrink-0 me-2">
                                                                <span
                                                                    class="avatar-title bg-info-subtle rounded-circle">
                                                                    <img src="../assets/images/products/logo/logo-4.svg"
                                                                        alt="" height="22">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="text-muted fs-12">Clothing</span> <br />
                                                                <h5 class="fs-14 mt-1">Jocky-Johns - USA</h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Established</span>
                                                        <h5 class="fs-14 mt-1 fw-normal">Since 1985</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Stores</span> <br />
                                                        <h5 class="fs-14 mt-1 fw-normal">205</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Products</span>
                                                        <h5 class="fs-14 mt-1 fw-normal">1,258</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Status</span>
                                                        <h5 class="fs-14 mt-1 fw-normal"><i
                                                                class="ti ti-circle-filled fs-12 text-success"></i>
                                                            Active</h5>
                                                    </td>
                                                    <td style="width: 30px;">
                                                        <div class="dropdown">
                                                            <a href="#"
                                                                class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti ti-dots-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item">Refresh Report</a>
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item">Export Report</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-md flex-shrink-0 me-2">
                                                                <span
                                                                    class="avatar-title bg-secondary-subtle rounded-circle">
                                                                    <img src="../assets/images/products/logo/logo-5.svg"
                                                                        alt="" height="22">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="text-muted fs-12">Lifestyle</span> <br />
                                                                <h5 class="fs-14 mt-1">Ginne - India</h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Established</span>
                                                        <h5 class="fs-14 mt-1 fw-normal">Since 2001</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Stores</span> <br />
                                                        <h5 class="fs-14 mt-1 fw-normal">89</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Products</span>
                                                        <h5 class="fs-14 mt-1 fw-normal">338</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Status</span>
                                                        <h5 class="fs-14 mt-1 fw-normal"><i
                                                                class="ti ti-circle-filled fs-12 text-success"></i>
                                                            Active</h5>
                                                    </td>
                                                    <td style="width: 30px;">
                                                        <div class="dropdown">
                                                            <a href="#"
                                                                class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti ti-dots-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item">Refresh Report</a>
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item">Export Report</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-md flex-shrink-0 me-2">
                                                                <span
                                                                    class="avatar-title bg-danger-subtle rounded-circle">
                                                                    <img src="../assets/images/products/logo/logo-6.svg"
                                                                        alt="" height="22">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="text-muted fs-12">Fashion</span> <br />
                                                                <h5 class="fs-14 mt-1">DDoen - Brazil</h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Established</span>
                                                        <h5 class="fs-14 mt-1 fw-normal">Since 1995</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Stores</span> <br />
                                                        <h5 class="fs-14 mt-1 fw-normal">650</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Products</span>
                                                        <h5 class="fs-14 mt-1 fw-normal">6,842</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Status</span>
                                                        <h5 class="fs-14 mt-1 fw-normal"><i
                                                                class="ti ti-circle-filled fs-12 text-success"></i>
                                                            Active</h5>
                                                    </td>
                                                    <td style="width: 30px;">
                                                        <div class="dropdown">
                                                            <a href="#"
                                                                class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti ti-dots-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item">Refresh Report</a>
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item">Export Report</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar-md flex-shrink-0 me-2">
                                                                <span
                                                                    class="avatar-title bg-primary-subtle rounded-circle">
                                                                    <img src="../assets/images/products/logo/logo-8.svg"
                                                                        alt="" height="22">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="text-muted fs-12">Manufacturing</span>
                                                                <br />
                                                                <h5 class="fs-14 mt-1">Zoddiak - Canada</h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Established</span>
                                                        <h5 class="fs-14 mt-1 fw-normal">Since 1963</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Stores</span> <br />
                                                        <h5 class="fs-14 mt-1 fw-normal">109</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Products</span>
                                                        <h5 class="fs-14 mt-1 fw-normal">952</h5>
                                                    </td>
                                                    <td>
                                                        <span class="text-muted fs-12">Status</span>
                                                        <h5 class="fs-14 mt-1 fw-normal"><i
                                                                class="ti ti-circle-filled fs-12 text-success"></i>
                                                            Active</h5>
                                                    </td>
                                                    <td style="width: 30px;">
                                                        <div class="dropdown">
                                                            <a href="#"
                                                                class="dropdown-toggle text-muted drop-arrow-none card-drop p-0"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ti ti-dots-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item">Refresh Report</a>
                                                                <a href="javascript:void(0);"
                                                                    class="dropdown-item">Export Report</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive-->
                                </div> <!-- end card-body-->

                                <div class="card-footer border-0">
                                    <div
                                        class="align-items-center justify-content-between row text-center text-sm-start">
                                        <div class="col-sm">
                                            <div class="text-muted">
                                                Showing <span class="fw-semibold">5</span> of <span
                                                    class="fw-semibold">15</span> Results
                                            </div>
                                        </div>
                                        <div class="col-sm-auto mt-3 mt-sm-0">
                                            <ul
                                                class="pagination pagination-boxed pagination-sm mb-0 justify-content-center">
                                                <li class="page-item disabled">
                                                    <a href="#" class="page-link"><i class="ti ti-chevron-left"></i></a>
                                                </li>
                                                <li class="page-item active">
                                                    <a href="#" class="page-link">1</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link"><i
                                                            class="ti ti-chevron-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> <!-- -->
                                </div>

                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xxl-6">
                            <div class="card">
                                <div
                                    class="card-header d-flex flex-wrap align-items-center gap-2 border-bottom border-dashed">
                                    <h4 class="header-title me-auto">Top Selling Products</h4>

                                    <div class="d-flex gap-2 justify-content-end text-end">
                                        <a href="javascript:void(0);" class="btn btn-sm btn-secondary">Import <i
                                                class="ti ti-download ms-1"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-sm btn-primary">Export <i
                                                class="ti ti-file-export ms-1"></i></a>
                                    </div>
                                </div>

                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-custom align-middle table-nowrap table-hover mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="avatar-lg">
                                                            <img src="../assets/images/products/p-1.png" alt="Product-1"
                                                                class="img-fluid rounded-2">
                                                        </div>
                                                    </td>
                                                    <td class="ps-0">
                                                        <h5 class="fs-14 my-1"><a
                                                                href="apps-ecommerce-product-details.html"
                                                                class="link-reset">ASOS High Waist Tshirt</a></h5>
                                                        <span class="text-muted fs-12">07 April 2024</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1">$79.49</h5>
                                                        <span class="text-muted fs-12">Price</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1">82</h5>
                                                        <span class="text-muted fs-12">Quantity</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center justify-content-end">
                                                            <div class="me-2">
                                                                <h5 class="fs-14 my-1">$6,518.18</h5>
                                                                <span class="text-muted fs-12">Amount</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar-lg">
                                                            <img src="../assets/images/products/p-7.png" alt="Product-1"
                                                                class="img-fluid rounded-2">
                                                        </div>
                                                    </td>
                                                    <td class="ps-0">
                                                        <h5 class="fs-14 my-1"><a
                                                                href="apps-ecommerce-product-details.html"
                                                                class="link-reset">Marco Single Sofa</a></h5>
                                                        <span class="text-muted fs-12">25 March 2024</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1">$128.50</h5>
                                                        <span class="text-muted fs-12">Price</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1">37</h5>
                                                        <span class="text-muted fs-12">Quantity</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center justify-content-end">
                                                            <div class="me-2">
                                                                <h5 class="fs-14 my-1">$4,754.50</h5>
                                                                <span class="text-muted fs-12">Amount</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar-lg">
                                                            <img src="../assets/images/products/p-4.png" alt="Product-1"
                                                                class="img-fluid rounded-2">
                                                        </div>
                                                    </td>
                                                    <td class="ps-0">
                                                        <h5 class="fs-14 my-1"><a
                                                                href="apps-ecommerce-product-details.html"
                                                                class="link-reset">Smart Headphone </a></h5>
                                                        <span class="text-muted fs-12">17 March 2024</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1">$39.99</h5>
                                                        <span class="text-muted fs-12">Price</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1">64</h5>
                                                        <span class="text-muted fs-12">Quantity</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center justify-content-end">
                                                            <div class="me-2">
                                                                <h5 class="fs-14 my-1">$2,559.36</h5>
                                                                <span class="text-muted fs-12">Amount</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar-lg">
                                                            <img src="../assets/images/products/p-5.png" alt="Product-1"
                                                                class="img-fluid rounded-2">
                                                        </div>
                                                    </td>
                                                    <td class="ps-0">
                                                        <h5 class="fs-14 my-1"><a
                                                                href="apps-ecommerce-product-details.html"
                                                                class="link-reset">Lightweight Jacket</a></h5>
                                                        <span class="text-muted fs-12">12 March 2024</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1">$20.00</h5>
                                                        <span class="text-muted fs-12">Price</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1">184</h5>
                                                        <span class="text-muted fs-12">Quantity</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center justify-content-end">
                                                            <div class="me-2">
                                                                <h5 class="fs-14 my-1">$3,680.00</h5>
                                                                <span class="text-muted fs-12">Amount</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar-lg">
                                                            <img src="../assets/images/products/p-6.png" alt="Product-1"
                                                                class="img-fluid rounded-2">
                                                        </div>
                                                    </td>
                                                    <td class="ps-0">
                                                        <h5 class="fs-14 my-1"><a
                                                                href="apps-ecommerce-product-details.html"
                                                                class="link-reset">Marco Shoes</a></h5>
                                                        <span class="text-muted fs-12">05 March 2024</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1">$28.49</h5>
                                                        <span class="text-muted fs-12">Price</span>
                                                    </td>
                                                    <td>
                                                        <h5 class="fs-14 my-1">69</h5>
                                                        <span class="text-muted fs-12">Quantity</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center justify-content-end">
                                                            <div class="me-2">
                                                                <h5 class="fs-14 my-1">$1,965.81</h5>
                                                                <span class="text-muted fs-12">Amount</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive-->
                                </div> <!-- end card-body-->

                                <div class="card-footer border-0">
                                    <div
                                        class="align-items-center justify-content-between row text-center text-sm-start">
                                        <div class="col-sm">
                                            <div class="text-muted">
                                                Showing <span class="fw-semibold">5</span> of <span
                                                    class="fw-semibold">10</span> Results
                                            </div>
                                        </div>
                                        <div class="col-sm-auto mt-3 mt-sm-0">
                                            <ul
                                                class="pagination pagination-boxed pagination-sm mb-0 justify-content-center">
                                                <li class="page-item disabled">
                                                    <a href="#" class="page-link"><i class="ti ti-chevron-left"></i></a>
                                                </li>
                                                <li class="page-item active">
                                                    <a href="#" class="page-link">1</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link"><i
                                                            class="ti ti-chevron-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> <!-- -->
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div> <!-- end row-->

                </div> <!-- end col-->

                
            </div> <!-- end row-->

        </div> <!-- container -->

        <!-- Footer Start -->
        <?php include 'partials/footer.php'; ?>

        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Theme Settings -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas">
        <div class="d-flex align-items-center gap-2 px-3 py-3 offcanvas-header border-bottom border-dashed">
            <h5 class="flex-grow-1 mb-0">Theme Settings</h5>

            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body p-0 h-100" data-simplebar>
            <div class="p-3 border-bottom border-dashed">
                <h5 class="mb-3 fs-16 fw-bold">Color Scheme</h5>

                <div class="row">
                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-light"
                                value="light">
                            <label class="form-check-label p-3 w-100 d-flex justify-content-center align-items-center"
                                for="layout-color-light">
                                <iconify-icon icon="solar:sun-bold-duotone" class="fs-32 text-muted"></iconify-icon>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Light</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-dark"
                                value="dark">
                            <label class="form-check-label p-3 w-100 d-flex justify-content-center align-items-center"
                                for="layout-color-dark">
                                <iconify-icon icon="solar:cloud-sun-2-bold-duotone"
                                    class="fs-32 text-muted"></iconify-icon>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Dark</h5>
                    </div>
                </div>
            </div>

            <div class="p-3 border-bottom border-dashed">
                <h5 class="mb-3 fs-16 fw-bold">Topbar Color</h5>

                <div class="row">
                    <div class="col-3">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-topbar-color"
                                id="topbar-color-light" value="light">
                            <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="topbar-color-light">
                                <span class="d-flex align-items-center justify-content-center h-100">
                                    <span class="p-2 d-inline-flex shadow rounded-circle bg-white"></span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Light</h5>
                    </div>

                    <div class="col-3">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-dark"
                                value="dark">
                            <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="topbar-color-dark">
                                <span class="d-flex align-items-center justify-content-center h-100">
                                    <span class="p-2 d-inline-flex shadow rounded-circle bg-dark"></span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Dark</h5>
                    </div>
                </div>
            </div>

            <div class="p-3 border-bottom border-dashed">
                <h5 class="mb-3 fs-16 fw-bold">Menu Color</h5>

                <div class="row">
                    <div class="col-3">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-menu-color" id="sidenav-color-light"
                                value="light">
                            <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="sidenav-color-light">
                                <span class="d-flex align-items-center justify-content-center h-100">
                                    <span class="p-2 d-inline-flex shadow rounded-circle bg-white"></span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Light</h5>
                    </div>

                    <div class="col-3" style="--ct-dark-rgb: 64,73,84;">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-menu-color" id="sidenav-color-dark"
                                value="dark">
                            <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="sidenav-color-dark">
                                <span class="d-flex align-items-center justify-content-center h-100">
                                    <span class="p-2 d-inline-flex shadow rounded-circle bg-dark"></span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Dark</h5>
                    </div>
                </div>
            </div>

            <div class="p-3 .border-bottom .border-dashed">
                <h5 class="mb-3 fs-16 fw-bold">Sidebar Size</h5>

                <div class="row">
                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size"
                                id="sidenav-size-default" value="default">
                            <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-default">
                                <span class="d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                            <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Default</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size"
                                id="sidenav-size-compact" value="compact">
                            <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-compact">
                                <span class="d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 border-end  flex-column p-1">
                                            <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Compact</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size"
                                id="sidenav-size-small" value="condensed">
                            <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-small">
                                <span class="d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 border-end flex-column"
                                            style="padding: 2px;">
                                            <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Condensed</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size"
                                id="sidenav-size-small-hover" value="sm-hover">
                            <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-small-hover">
                                <span class="d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 border-end flex-column"
                                            style="padding: 2px;">
                                            <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Hover View</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-full"
                                value="full">
                            <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-full">
                                <span class="d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="d-block p-1 bg-dark-subtle mb-1"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Full Layout</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size"
                                id="sidenav-size-fullscreen" value="fullscreen">
                            <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-fullscreen">
                                <span class="d-flex h-100">
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Hidden</h5>
                    </div>
                </div>
            </div>

            <div class="p-3 border-bottom border-dashed d-none">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="fs-16 fw-bold mb-0">Container Width</h5>

                    <div class="btn-group radio" role="group">
                        <input type="radio" class="btn-check" name="data-container-position" id="container-width-fixed"
                            value="fixed">
                        <label class="btn btn-sm btn-soft-primary w-sm" for="container-width-fixed">Full</label>

                        <input type="radio" class="btn-check" name="data-container-position"
                            id="container-width-scrollable" value="scrollable">
                        <label class="btn btn-sm btn-soft-primary w-sm ms-0"
                            for="container-width-scrollable">Boxed</label>
                    </div>
                </div>
            </div>

            <div class="p-3 border-bottom border-dashed d-none">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="fs-16 fw-bold mb-0">Layout Position</h5>

                    <div class="btn-group radio" role="group">
                        <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed"
                            value="fixed">
                        <label class="btn btn-sm btn-soft-primary w-sm" for="layout-position-fixed">Fixed</label>

                        <input type="radio" class="btn-check" name="data-layout-position"
                            id="layout-position-scrollable" value="scrollable">
                        <label class="btn btn-sm btn-soft-primary w-sm ms-0"
                            for="layout-position-scrollable">Scrollable</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex align-items-center gap-2 px-3 py-2 offcanvas-header border-top border-dashed">
            <button type="button" class="btn w-50 btn-soft-danger" id="reset-layout">Reset</button>
            <button type="button" class="btn w-50 btn-soft-info">Buy Now</button>
        </div>

    </div>

    <!-- Vendor js -->
    <?php include 'partials/footer-scripts.php'; ?>

</body>

</html>