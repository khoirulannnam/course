<!DOCTYPE html>
<html lang="en">
@include('admin.css')

<body>
    <div class="adminx-container">

        @include('admin.navbar')

        @include('admin.sidebar')

        <div class="adminx-content">

            <div class="adminx-content d-flex justify-content-center" style="padding: 25px">
                <div class="table-responsive-md" pad>
                    <table class="table table-actions table-striped table-hover mb-0 table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">Nama</th>
                                <th scope="col" class="text-center">NPM</th>
                                <th scope="col" class="text-center">Kelas</th>
                                <th scope="col" class="text-center">KRS</th>
                                <th scope="col" class="text-center">Skema</th>
                                <th scope="col" class="text-center">Status</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $registration)
                                <tr>
                                    <td class="text-center">{{$registration->nama}}</td>
                                    <td class="text-center">{{$registration->npm}}</td>
                                    <td class="text-center">{{$registration->kelas}}</td>
                                    <td class="text-center "><a class="btn btn-sm btn-success" href="{{('krs')}}/{{$registration->krs}}">Cek KRS</a>
                                    </td>
                                    <td class="text-center">{{$registration->skema}}</td>
                                    <td class="text-center">{{$registration->status}}</td>
                                    <td class="text-center">
                                        <a onclick="return confirm('Are you sure to approved?')"
                                            href="{{ url('konfirmasi', $registration->id) }}"><button
                                                class="btn btn-sm btn-primary">Approved</button></a>
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
