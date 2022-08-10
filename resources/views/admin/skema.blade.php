<!DOCTYPE html>
<html lang="en">
@include('admin.css')

<body>
    <div class="adminx-container">

        @include('admin.navbar')

        @include('admin.sidebar')

        <div class="adminx-content">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="adminx-content d-flex justify-content-center" style="padding: 25px">
                <div class="table-responsive-md" pad>
                    <div class="text-end">
                        <a href="" class="btn btn-primary" data-toggle="modal"
                            data-target="#modalSubscriptionForm">Tambah</a>
                    </div>
                    <div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form action="/tambahskema" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-100 font-weight-bold">Tambah Skema</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body mx-3">
                                        <div class="md-form mb-5">
                                            <label data-error="wrong" data-success="right" for="form3">Nama
                                                Skema</label>
                                                <div class="row">
                                            <i class="fas fa-user prefix grey-text"></i>
                                            <input type="text" id="nama" name="nama"
                                                class="form-control validate">
                                            </div>
                                        </div>
                                        <div class="md-form mb-5">
                                            <label data-error="wrong" data-success="right" for="form3">Detail
                                                Skema</label>
                                                <div class="row">
                                            <i class="fas fa-user prefix grey-text"></i>
                                            <input type="text" id="detail" name="detail"
                                                class="form-control validate">
                                            </div>
                                        </div>
                                        <div class="md-form mb-5">
                                            <label data-error="wrong" data-success="right" for="form3">Lama
                                                Skema</label>
                                            <div class="row">
                                                <i class="fas fa-user prefix grey-text "></i>
                                                <input type="number" id="waktu" name="waktu"
                                                    class="form-control validate col-9">
                                                <p class="col-3">Hari</p>
                                            </div>
                                        </div>
                                        <div class="md-form mb-5">
                                            <label data-error="wrong" data-success="right" for="form3">Gambar
                                                Skema</label>
                                            <i class="fas fa-user prefix grey-text"></i>
                                            <input type="file" id="gambar" name="gambar"
                                                class="form-control validate">
                                        </div>



                                    </div>
                                    <div class="modal-footer d-flex justify-content-center">
                                        <input type="submit" name="submit" value="Tambah">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <table class="table table-actions table-striped table-hover mb-0 table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">Nama Skema</th>
                                <th scope="col" class="text-center">Detail Skema</th>
                                <th scope="col" class="text-center">Lama Skema</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($scheme as $scheme)
                                <tr>
                                    <td class="text-center">{{ $scheme->nama }}</td>
                                    <td class="text-center">{{ $scheme->detail }}</td>
                                    <td class="text-center">{{ $scheme->waktu }} Hari</td>
                                    <td class="text-center">
                                        <a onclick="return confirm('Are you sure to delete?')"
                                            href="{{ url('hapusskema', $scheme->id) }}"><button
                                                class="btn btn-sm btn-danger">Hapus</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    @include('admin.js')

</body>

</html>
