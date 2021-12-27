@extends('Backend.layouts.master')
@section('title') Ürün @endsection
@section('css')
    <!-- Dropzone css-->
    <link rel="stylesheet" type="text/css" href="{{asset('Backend/assets/css/vendors/dropzone.css')}}">
@endsection
@section('content')

    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Ürün Düzenle
                                <small>Admin Yönetim Paneli</small>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row product-adding">
                    @csrf
                    <div class="col-xl-6 ">
                        <div class="card">
                            <div class="card-header">
                                <h5>Genel</h5>
                            </div>
                            <div class="card-body">
                                <div class="digital-add needs-validation">
                                    <div class="form-group">
                                        <label for="validationCustom01" class="col-form-label pt-0"><span>*</span> Ürün Adı</label>
                                        <input class="form-control" id="title" name="title" type="text" value="" >
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label"><span>*</span> Marka</label>
                                        <select class="custom-select form-control" required="" name="brand">
                                            <option value="">--Belirtilmemiş--</option>
                                            @foreach($brands as $brand)
                                                <option value="{{$brand->id}}">{{$brand->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label"><span>*</span> Kategori</label>
                                        <select class="custom-select form-control" required="" name="menu">
                                            <option value="">--Belirtilmemiş--</option>
                                            @foreach($menus as $menu)
                                                <option value="{{$menu->id}}">{{$menu->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label for="price" class="col-form-label"><span>*</span> Ürün Fiyatı</label>
                                                    <input class="form-control" id="price" type="text" name="price">
                                                    <span class="text-danger error-text " data-id="price"></span>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label for="discount" class="col-form-label">Ürün İndirim Fiyatı</label>
                                                    <input class="form-control" id="discount" type="text" name="discount" ">
                                                    <span class="text-danger error-text " data-id="discount"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustom02" class="col-form-label"><span>*</span> Ürün Kodu</label>
                                        <input class="form-control" id="validationCustom02" type="text" name="code">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label"><span>*</span> Durum</label>
                                        <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                            <label class="d-block" for="edo-ani">
                                                <input class="radio_animated" id="edo-ani" type="radio" name="enable">
                                                Aktif
                                            </label>
                                            <label class="d-block" for="edo-ani1">
                                                <input class="radio_animated" id="edo-ani1" type="radio" name="disable">
                                                Pasif
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label pt-0"> Ürün Fotoğrafı Ekle</label>
                                        <div class="box-input-file"><input class="upload" type="file" id="photo" name="images"><i class="fa fa-plus"></i></div>
                                        <span class="text-danger error-text " data-id="images"></span>
                                    </div>
                                    <div hidden class="form-group noHidden" style="margin-top: 25px;">
                                        <label class="col-form-label pt-0"> Ürün Fotoğrafı</label>
                                        <div  class=" box-input-file"><img  class="img-fluid rounded mx-auto d-block" src=""id="imgPreview" style="width: 485px !important; height: 485px !important;" ></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Ürün Hakkında</h5>
                            </div>
                            <div class="card-body">
                                <div class="digital-add needs-validation">
                                    <div class="form-group mb-0">
                                        <div class="description-sm">
                                            <textarea id="about" name="about" cols="10" rows="4">{{$product->description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5>Meta Data</h5>
                            </div>
                            <div class="card-body">
                                <div class="digital-add needs-validation">
                                    <div class="form-group">
                                        <label for="validationCustom05" class="col-form-label pt-0"> Meta Keywords</label>
                                        <input class="form-control" id="validationCustom05" type="text" name="keywords">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Meta Description</label>
                                        <textarea rows="4" cols="12" name="description"></textarea>
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="product-buttons text-center">
                                            <button type="submit" class="btn btn-primary productAdd">Ekle</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <!-- Container-fluid Ends-->

    </div>
@endsection
@section('js')
    <!--dropzone js-->
    <script src="{{(asset('Backend/assets/js/dropzone/dropzone.js'))}}"></script>
    <script src="{{(asset('Backend/assets/js/dropzone/dropzone-script.js'))}}"></script>
    <script>
        $(document).ready(()=>{
            $('#discount').change(function () {
                if (isNumeric('#discount', 'discount', 'Lütfen sayısal değer giriniz.'))
                    $('#discount').val(' ');
            });
            $('#price').change(function () {
                if(isNumeric('#price', 'price', 'Lütfen sayısal değer giriniz.'))
                    $('#price').val(' ');
            });


            $('#photo').change(function(){
                const file = this.files[0];
                if ((file.type == 'image/jpeg') ||file.type == 'image/jpg')
                {
                    if (file){
                        let reader = new FileReader();
                        reader.onload = function(event){
                            console.log(event.target.result);
                            $('#imgPreview').attr('src', event.target.result);
                            $('.noHidden').prop('hidden', false);
                        }
                        reader.readAsDataURL(file);
                    }

                    $('span[data-id="images"]').hide();
                }
                else
                    $('span[data-id="images"]').text('Lütfen resim uzantısını .jpg olarak değiştiriniz.');

            });


            // Numeric sayi hatası verme
            function isNumeric(id, dataId, Text) {
                if (!$.isNumeric($(id).val()))
                {
                    $('span[data-id='+dataId+']').text(Text);
                    return true;
                }
                else
                    $('span[data-id='+dataId+']').hide();
            }
        });
    </script>
@endsection
