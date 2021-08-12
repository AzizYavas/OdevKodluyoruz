@extends('admin.master')
@section('title','Ürünler İNDEX')
@section('content')

    <?php

    use App\Models\Product;
    use App\Models\Category;

    ?>

    @include('admin.layouts.alert')

    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12">
                        <!-- Table head options start -->
                        <section class="section">
                            <div class="row" id="table-head">
                                <div class="col-12 col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Ürünler</h4>
                                            <a href="{{route('productform')}}" class="btn btn-outline-success">Ürün Ekle</a>
                                        </div>
                                        <div class="card-content">
                                            <!-- table head dark -->
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <thead class="thead-dark">
                                                    <tr>
                                                        <th>Durum</th>
                                                        <th>Kategori İd</th>
                                                        <th>Kullanıcı İd</th>
                                                        <th>Stok Numara</th>
                                                        <th>Url</th>
                                                        <th>Ürün İsmi</th>
                                                        <th>Açıklama</th>
                                                        <th>Ürün Sırası</th>
                                                        <th>Fiyatı</th>
                                                        <th>Kur Bilgisi</th>
                                                        <th>Kayıt Tarihi</th>
                                                        <th>Güncelleme Tarihi</th>
                                                        <th>Ayarlar</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($product as $allproduct)
                                                        <tr>
                                                            <td>{!! Product::statusCode($allproduct->status) !!}</td>
                                                            <td class="text-bold-500">{{$allproduct->category_id}}</td>
                                                            <td>{{$allproduct->user_id}}</td>
                                                            <td class="text-bold-500">{{$allproduct->unicode}}</td>
                                                            <td>{{$allproduct->slug}}</td>
                                                            <td>{{$allproduct->title}}</td>
                                                            <td>{{$allproduct->description}}</td>
                                                            <td class="text-bold-500">{{$allproduct->order}}</td>
                                                            <td>{{$allproduct->prc}}</td>
                                                            <td class="text-bold-500">{{$allproduct->cid}}</td>
                                                            <td>{{$allproduct->olusturma_tarihi}}</td>
                                                            <td>{{$allproduct->guncelleme_tarihi}}</td>
                                                            <td>
                                                                <a href="edit/{{$allproduct->id}}"
                                                                   class="btn btn-outline-primary">Güncelle</a>
                                                                <a href="delete/{{$allproduct->id}}"
                                                                   class="btn btn-outline-danger">Sil</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Table head options end -->
                    </div>

                </div>
            </div>
        </section>
    </div>


@endsection
@section('footer')
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $('.alert').slideUp(500)
            }, 3000);
        });
    </script>
@endsection
