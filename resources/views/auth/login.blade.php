<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    body{
        font-family: 'Times New Roman', Times, serif;
    }
</style>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 mt-5">
                <div class="card border border-dark">
                    <div class="card-header ">
                        <h3 class="text-primary">Login</h3>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="/home">
                            @csrf


                            <div class="row mb-4">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email">
                                    @if ($errors->first('email'))
                                    <div class=" alert alert-danger">{{$errors->first('email')}}</div>
                                    @endif

                                </div>

                            </div>
                            <div class="row mb-4">
                                <label for="" class="col-md-4 col-form-label text-md-end">Password</label>

                                <div class="col-md-6">
                                    <input  type="password" class="form-control" name="password" >
                                    @if ($errors->first('password'))
                                    <div class=" alert alert-danger">{{$errors->first('password')}}</div>
                                    @endif
                                </div>

                            </div>
                            <div class="row ">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Login</button>

                                    <button type="submit" class="btn btn-primary"><a href="/register" class="text-white text-decoration-none">Register</a></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
