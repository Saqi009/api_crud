<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>
    <div class="wrapper">

        @include('partials.sidebar')

        <div class="main">

            @include('partials.navbar')

            <main class="content">
                <div class="container-fluid p-0">

                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="h3 mb-3">Countries</h1>
                        </div>
                        <div class="col-md-6 text-end">
                            <a href="{{ route('api.create') }}" class="btn btn-success">Add Country</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Sr No.</th>
                                                <th>Name</th>
                                                <th>Capital</th>
                                                <th>Currency</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Pakistan</td>
                                                <td>Islamabad</td>
                                                <td>PKR</td>
                                                <td>
                                                    <a href="" class="btn btn-info">Edit</a>
                                                    <a href="" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>

            @include('partials.footer')

        </div>
    </div>

    @include('partials.script')

</body>

</html>
