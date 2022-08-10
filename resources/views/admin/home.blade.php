<!DOCTYPE html>
<html lang="en">
@include('admin.css')

<body>
    <div class="adminx-container">

        @include('admin.navbar')

        @include('admin.sidebar')

        <div class="adminx-content">

            <div class="adminx-main-content">

                <div class="container-fluid">

                    <div class="row justify-content-md-center">


                        <div class="col-md-6 col-lg-3 d-flex">
                            <div class="card border-0 bg-primary text-white text-center mb-grid w-100">
                                <div class="d-flex flex-row align-items-center h-100">
                                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                                        <i data-feather="book"></i>
                                    </div>

                                    <div class="card-body">
                                        <div class="card-info-title"> <a class="text-white"
                                                href="{{ 'skema ' }}">Skema Kursus</a></div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex">
                            <div class="card border-0 bg-danger text-white text-center mb-grid w-100">
                                <div class="d-flex flex-row align-items-center h-100">
                                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                                        <i data-feather="calendar"></i>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-info-title"> <a class="text-white"
                                            href="{{ 'jadwal' }}">Jadwal Kursus</a></div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex">
                            <div class="card border-0 bg-dark text-white text-center mb-grid w-100">
                                <div class="d-flex flex-row align-items-center h-100">
                                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                                        <i data-feather="bookmark"></i>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-info-title"> <a class="text-white"
                                            href="{{ 'permohonan' }}">Permohonan Kursus</a></div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex">
                            <div class="card border-0 bg-success text-white text-center mb-grid w-100">
                                <div class="d-flex flex-row align-items-center h-100">
                                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                                        <i data-feather="users"></i>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-info-title"> <a class="text-white"
                                            href="{{ 'daftarmahasiswa' }}">Daftar Mahasiswa</a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


        </div>

    </div>

    @include('admin.js')

</body>

</html>
