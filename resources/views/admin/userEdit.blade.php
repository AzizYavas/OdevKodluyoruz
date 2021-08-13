@extends('admin.master')
@section('title','KULLANICI GÜNCELLEME')
@section('content')

    @include('admin.layouts.alert')

    <!-- Basic Vertical form layout section start -->
    <section id="basic-vertical-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ürün Güncelle</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" action="{{ route('userupdate') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$userdit->id}}">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-12 mb-12">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Kullanıcı Adı</label>
                                                    <input type="text" id="first-name-vertical"
                                                           value="{{$userdit->uname}}" class="form-control"
                                                           name="uname">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Şifre</label>
                                                    <input type="text" id="first-name-vertical"
                                                           value="{{$userdit->pass}}" class="form-control"
                                                           name="pass">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Mail</label>
                                                    <input type="email" id="first-name-vertical"
                                                           value="{{$userdit->mail}}" class="form-control"
                                                           name="mail">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Telefon Numarası</label>
                                                    <input type="text" id="first-name-vertical"
                                                           value="{{$userdit->mpno}}" class="form-control"
                                                           name="mpno">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Adı</label>
                                                    <input type="text" id="first-name-vertical"
                                                           value="{{$userdit->fname}}" class="form-control"
                                                           name="fname">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Soyadı</label>
                                                    <input type="text" id="first-name-vertical"
                                                           value="{{$userdit->lname}}" class="form-control"
                                                           name="lname">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-12">
                                            <h6>Kullanıcı Durum</h6>
                                            <fieldset class="form-group">
                                                <select class="form-select" name="status" id="basicSelect">
                                                    <option value="a" @if (old('status') == 'a') selected @endif>
                                                        Aktif
                                                    </option>
                                                    <option value="p" @if (old('status') == 'p') selected @endif>
                                                        Pasif
                                                    </option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit"
                                                    class="btn btn-primary me-1 mb-1">GüNCELLE
                                            </button>
                                        </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic Vertical form layout section end -->


@endsection
