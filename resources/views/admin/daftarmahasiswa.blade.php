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
                                <th scope="col" class="text-center">Status</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $user)
                                <tr>
                                    <td class="text-center">{{$user->name}}</td>
                                    <td class="text-center">{{$user->email}}</td>
                                    <td class="text-center">{{$user->verified}}</td>
                                    <td class="text-center">
                                        <a onclick="return confirm('Are you sure to verified?')"
                                            href="{{ url('verifikasi', $user->id) }}"><button
                                                class="btn btn-sm btn-primary">Verifikasi</button></a>
                                        <a onclick="return confirm('Are you sure to delete?')"
                                            href="{{ url('hapususer', $user->id) }}"><button
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
