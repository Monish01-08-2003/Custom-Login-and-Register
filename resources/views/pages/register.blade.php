@extends('layout.mainLayout')
@section('title', 'Register')
@section('content')
    <section class="h-100 bg-dark">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-success" role="alert">
                {{ session('error') }}
            </div>
        @endif
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                                    alt="Sample photo" class="img-fluid"
                                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>
                            <form method="POST" action={{ route('registerValidate') }} class="col-xl-6"required>
                                @csrf
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase">Register form</h3>
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div data-mdb-input-init class="form-outline">
                                                <input type="text" name="name" id="form3Example1m"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example1m">Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input name="email" type="text" id="form3Example97"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example97">Email ID</label>
                                    </div>
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input name="password" type="password" id="****"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="****">Password</label>
                                    </div>
                                    <div class="d-flex justify-content-end pt-3">
                                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-light btn-lg">Reset
                                            all</button>
                                        <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-warning btn-lg ms-2">Submit form</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
