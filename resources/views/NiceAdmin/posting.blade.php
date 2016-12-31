@extends('NiceAdmin.master')
@section('title', 'Postingan')
@section('posting')
    <section id="main-content">
        <section class="wrapper">
            <form action="" method="post" class="form form-horizontal" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Postingan Baru
                            </header>
                            <div class="panel-body">
                                <div class="form">
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <label for="judul">Judul</label>
                                            <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <input type="file" name="image" accept="image/*" required >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                           <textarea class="form-control ckeditor" name="artikel" rows="10" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <button type="submit" name="submit" class="btn btn-primary">Posting</button>
                                        </div>
                                    </div>
                                    {{csrf_field()}}
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </form>
        </section>
    </section>
 @endsection