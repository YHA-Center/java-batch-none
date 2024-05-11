<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('asset/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('asset/css/sb-admin-2.min.css') }}" rel="stylesheet">

    {{-- Summernote lib  --}}
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

</head>

<body id="page-top">

    <div class="container-fluid p-1 p-md-4">
        <div class="row">

            {{-- back button  --}}
            <div class="col-12">
                <a href="{{ route('user.home') }}" class="btn btn-link">Back</a>
            </div>

            <div class="col-12 col-md-4">
                {{-- profile  --}}
                <div class="card">
                    <div class="card-header">Profile</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                {{-- for image  --}}
                            </div>
                            <div class="col-4 mb-3">Username</div><div class="col-8">{{ Auth::user()->name }}</div>
                            <div class="col-4 mb-3">Email</div><div class="col-8">{{ Auth::user()->email }}</div>
                            <div class="col-4 mb-3">Created on</div><div class="col-8">{{ Auth::user()->created_at->diffForHumans() }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8">
                {{-- title  --}}
                <div class="row">
                    <div class="col-4">
                        <a href="" class="btn btn-primary">New Post</a>
                    </div>
                    <div class="col-8">

                    </div>
                </div>

                {{-- posts list  --}}
                <div class="row mt-4">
                    @foreach ($posts as $post)
                        <div class="col-12 col-md-6 col-lg-4">
                            <!-- Blog post-->
                            <div class="card mb-4">
                                <a href="#!"><img class="card-img-top" height="180" src="{{ asset($post->cover) }}" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted d-flex justify-content-between "> <span>Post by <b>{{ $post->User->name }}</b></span> <span>{{  $post->created_at->diffForHumans() }}</span> </div>
                                    <h2 class="card-title h4"> {{ $post->title }} </h2>
                                    <p class="card-text">
                                        <?= Str::words($post->description, 15, '...') ?>
                                    </p>
                                    <a class="btn btn-primary" href="{{ route('blog.get', $post->id) }}">Read more →</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('asset/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
