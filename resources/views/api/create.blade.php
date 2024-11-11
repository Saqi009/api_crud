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
                                    <form id="add-form" class="row">
                                        <div class="mb-2 col-md-6">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="enter country name!">
                                        </div>
                                        <div class="mb-2 col-md-6">
                                            <label for="capital" class="form-label">Capital</label>
                                            <input type="text" class="form-control" id="capital" name="capital" placeholder="enter country capital!">
                                        </div>
                                        <div class="mb-2 col-md-6">
                                            <label for="currency" class="form-label">Currency</label>
                                            <input type="text" class="form-control" id="currency" name="currency" placeholder="enter country currency!">
                                        </div>
                                        <div class="mt-3">
                                            <input type="submit" class="btn btn-success">
                                        </div>
                                    </form>
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

    <script src="{{ asset('template/js/custom.js') }}"></script>

    <script>
        const addRoute = @json(route('api.create'));
    </script>

</body>

</html>
