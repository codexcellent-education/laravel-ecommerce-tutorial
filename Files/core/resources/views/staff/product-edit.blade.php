@extends('layouts.staff')
@section('import_style')
    <link href="{{asset('assets/admin/css/select2.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/admin/css/bootstrap-toggle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/bootstrap-fileinput.css') }}" rel="stylesheet">
@endsection
@section('style')
    <style>
        .select2-selection,.select2-results{
            font-weight: bold !important;
        }
    </style>
@endsection
@section('content')


    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-info-circle"></i> {{ $page_title }}</h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <button type="button" class="btn btn-primary btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-primary btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">

                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-sm-12">

                            {!! Form::model($product,['route'=>['staff-product-update',$product->id],'method'=>'put','role'=>'form','class'=>'form-horizontal','files'=>true]) !!}
                            <div class="form-body">

                                <div class="form-group">
                                    <label class="col-md-12"><strong style="text-transform: uppercase;">Product Band</strong></label>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <select class="form-control select2 bold" name="partner_id" required style="width: 100%;">
                                                @if($product->partner_id == 0)
                                                    <option class="bold" value="0" selected>None Band</option>
                                                    @foreach($partner as $p)
                                                        <option class="bold" value="{{ $p->id }}">{{ $p->name }}</option>
                                                    @endforeach
                                                @else
                                                    <option class="bold" value="0">None Band</option>
                                                    @foreach($partner as $p)
                                                        @if($product->partner_id == $p->id)
                                                            <option class="bold" value="{{ $p->id }}" selected>{{ $p->name }}</option>
                                                        @else
                                                            <option class="bold" value="{{ $p->id }}">{{ $p->name }}</option>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </select>
                                            <span class="input-group-addon"><strong><i class="fa fa-indent"></i></strong></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12"><strong style="text-transform: uppercase;">Product Category</strong></label>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <select class="form-control select2 bold" name="category_id" id="category_id" required style="width: 100%;">
                                                <option class="bold" value="">Select One</option>
                                                @foreach($category as $cat)
                                                    @if($cat->id == $product->category_id)
                                                    <option class="bold" selected value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                    @else
                                                    <option class="bold" value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            <span class="input-group-addon"><strong><i class="fa fa-indent"></i></strong></span>
                                        </div>
                                    </div>
                                </div>

                                <div id="subcat" style="display: {{ $product->subcategory_id == null ? 'none' : 'block' }}">
                                    <div class="form-group">
                                        <label class="col-md-12"><strong style="text-transform: uppercase;">Select Subcategory </strong></label>
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <select class="form-control select2 bold" name="subcategory_id" id="subcategory_id" required style="width: 100%;">
                                                    <option class="bold" value="">Select One</option>
                                                    @foreach($subcategory as $scat)
                                                        @if($scat->id == $product->subcategory_id)
                                                            <option class="bold" selected value="{{ $scat->id }}">{{ $scat->name }}</option>
                                                        @else
                                                            <option class="bold" value="{{ $scat->id }}">{{ $scat->name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                <span class="input-group-addon"><strong><i class="fa fa-list"></i></strong></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="childcat" style="display: {{ $product->childcategory_id == null ? 'none' : 'block' }}">
                                    <div class="form-group">
                                        <label class="col-md-12"><strong style="text-transform: uppercase;">Product Child Category </strong></label>
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <select class="form-control select2 bold" name="childcategory_id" id="childcategory_id" style="width: 100%;">
                                                    <option class="bold" value="">Select One</option>
                                                    @foreach($childcategory as $scat)
                                                        @if($scat->id == $product->childcategory_id)
                                                            <option class="bold" selected value="{{ $scat->id }}">{{ $scat->name }}</option>
                                                        @else
                                                            <option class="bold" value="{{ $scat->id }}">{{ $scat->name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                <span class="input-group-addon"><strong><i class="fa fa-list"></i></strong></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12"><strong style="text-transform: uppercase;">Product Name</strong></label>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <input name="name" class="form-control bold" value="{{ $product->name }}" placeholder="Product Name" required/>
                                            <span class="input-group-addon"><strong><i class="fa fa-file-text-o"></i></strong></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12"><strong style="text-transform: uppercase;">Product SKU Number</strong></label>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <input name="sku" class="form-control bold" value="{{ $product->sku }}" placeholder="Product SKU Number" readonly/>
                                            <span class="input-group-addon"><strong><i class="fa fa-sort-amount-asc"></i></strong></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12"><strong style="text-transform: uppercase;">Product Color</strong></label>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <select class="form-control select2 bold" name="color_status" id="color_status" required style="width: 100%;">
                                                @if($product->color_status == 0)
                                                    <option class="bold" value="0" selected>No Color</option>
                                                    <option class="bold" value="1">Multi Color</option>
                                                @else
                                                    <option class="bold" value="0">No Color</option>
                                                    <option class="bold" value="1" selected>Multi Color</option>
                                                @endif
                                            </select>
                                            <span class="input-group-addon"><strong><i class="fa fa-indent"></i></strong></span>
                                        </div>
                                    </div>
                                </div>


                                <div class="" id="color" style="display: {{ $product->color_status == 0 ? 'none' : 'block' }}">
                                    <div class="form-group">
                                        <label class="col-md-12"><strong style="text-transform: uppercase;">Select Color</strong></label>
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <select class="form-control select2 bold color" id="categoryColor" multiple="multiple" data-placeholder="Select Multi Color"  name="color[]" style="width: 100%;">
                                                    @foreach($color as $co)
                                                        <option class="bold" value="{{ $co->id }}">{{ $co->name }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="input-group-addon"><strong><i class="fa fa-indent"></i></strong></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12"><strong style="text-transform: uppercase;">Product Size</strong></label>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <select class="form-control select2 bold " id="size_status" name="size_status" required style="width: 100%;">
                                                @if($product->size_status == 0)
                                                    <option class="bold" value="0" selected>No Size</option>
                                                    <option class="bold" value="1">Multi Size</option>
                                                @else
                                                    <option class="bold" value="0">No Size</option>
                                                    <option class="bold" value="1" selected>Multi Size</option>
                                                @endif
                                            </select>
                                            <span class="input-group-addon"><strong><i class="fa fa-indent"></i></strong></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="" id="size" style="display: {{ $product->size_status == 0 ? 'none' : 'block' }}">
                                    <div class="form-group">
                                        <label class="col-md-12"><strong style="text-transform: uppercase;">Select Size</strong></label>
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <select class="form-control select2 bold size" id="categorySize" multiple="multiple" data-placeholder="Select Multi Size" name="size[]" style="width: 100%;">
                                                    @foreach($size as $sz)
                                                        <option class="bold" value="{{ $sz->id }}">{{ $sz->name }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="input-group-addon"><strong><i class="fa fa-indent"></i></strong></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12"><strong style="text-transform: uppercase;">Product Featured Image</strong></label>
                                    <div class="col-md-12">
                                        <img class="img-responsive" src="{{ asset('assets/images/product') }}/{{ $product->image }}" alt="{{ $product->name }}" style="width: 40%">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12"><strong style="text-transform: uppercase;">Change Featured Image</strong></label>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <input type="file" name="image" class="form-control" accept="image/*">
                                            <span class="input-group-addon"><strong><i class="fa fa-file-photo-o"></i></strong></span>
                                        </div>
                                        <code>Image Type of PNG,JPG,JPEG - Resize (780X1000)px</code>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12"><strong style="text-transform: uppercase;">Product Gallery Image</strong></label>
                                    <div class="col-md-12">
                                        <div class="row">
                                            @foreach($productImage as $pImage)
                                            <div class="col-md-3 col-sm-6">
                                                <img class="img-responsive margin-top-10" src="{{ asset('assets/images/product') }}/{{ $pImage->name }}" alt="{{ $product->name }}">
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12"><strong style="text-transform: uppercase;">Change Gallery Image</strong></label>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <input type="file" name="gallery_image[]" id="images" onchange="preview_images();" multiple class="form-control" accept="image/*">
                                            <span class="input-group-addon"><strong><i class="fa fa-file-photo-o"></i></strong></span>
                                        </div>
                                        <code>Image Type of PNG,JPG,JPEG - Resize (780X1000)px - Multiple Image Allowed. All Old Image will'be Deleted.</code>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12"><strong style="text-transform: uppercase;">Product Gallery Image Preview</strong></label>
                                    <div class="col-md-12">
                                        <div id="image_preview"></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12"><strong style="text-transform: uppercase;">Product Current Price</strong></label>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <input name="current_price" class="form-control bold" value="{{ $product->current_price }}" placeholder="Product Price" required/>
                                            <span class="input-group-addon"><strong>{{ $basic->currency }}</strong></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12"><strong style="text-transform: uppercase;">Product Previous Price</strong></label>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <input name="old_price" class="form-control bold" value="{{ $product->old_price }}" placeholder="Product Previous Price"/>
                                            <span class="input-group-addon"><strong>{{ $basic->currency }}</strong></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12"><strong style="text-transform: uppercase;">Product Stock</strong></label>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <input name="stock" class="form-control bold" value="{{ $product->stock }}" placeholder="Product Stock" required/>
                                            <span class="input-group-addon"><strong>Items</strong></span>
                                        </div>
                                    </div>
                                </div>


                                <div class='form-group'>
                                    <label class="col-md-12"><strong style="text-transform: uppercase;">Product Specification</strong></label>
                                    @foreach($productSpecification as $ps)
                                    <div class='col-sm-10' style="padding-bottom: 10px;">
                                        <input name='specification[]' value='{{ $ps->specification }}' class='form-control bold' type='text' placeholder='Product Specification'>
                                    </div>
                                    <a href='#' class='delete_button{{ $ps->id }} btn btn-danger' style="margin-bottom: 10px;"><i class='fa fa-times'></i> Remove Field</a>
                                    @endforeach
                                </div>


                                <div id="wrapper">
                                    <div id="dynamicInput">
                                        <div class="form-group">
                                            <div class="col-md-10">
                                                <input name="specification[]" class="form-control bold" type="text" placeholder="Product Specification">
                                            </div>
                                            <div class="col-md-2">
                                                <a href="#" id="add-form" class="btn btn-primary btn-block"><i class="fa fa-plus"></i> Add Another</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12"><strong style="text-transform: uppercase;">Product Description  </strong></label>
                                    <div class="col-md-12">
                                        <textarea name="description" id="area1" rows="5" class="form-control" required placeholder="Product Description">{{ $product->description }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12"><strong style="text-transform: uppercase;">Product Buy / Return Policy </strong></label>
                                    <div class="col-md-12">
                                        <textarea name="policy" id="area2" rows="5" class="form-control" required placeholder="Product Buy / Return Policy">{{ $product->policy }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12"><strong style="text-transform: uppercase;">Product Tags</strong></label>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <select class="form-control select2 bold" multiple="multiple" data-placeholder="Select Tags" id="tag" name="tags[]" style="width: 100%;">
                                                @foreach($tags as $tg)
                                                    <option class="bold" value="{{ $tg->id }}">{{ $tg->name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="input-group-addon"><strong><i class="fa fa-indent"></i></strong></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12"><strong style="text-transform: uppercase;">Product STATUS</strong></label>
                                    <div class="col-md-12">
                                        <input data-toggle="toggle" {{ $product->status == 1 ? 'checked' : '' }} data-onstyle="success" data-offstyle="danger" data-on="Active" data-off="Deactive" data-width="100%" data-size="large" type="checkbox" name="status">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit" onclick="nicEditors.findEditor('area1').saveContent();nicEditors.findEditor('area2').saveContent();" class="btn btn-primary btn-block bold btn-lg uppercase"><i class="fa fa-send"></i> Update Product</button>
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div><!-- row -->
                </div>
            </div>
        </div>
    </div><!---ROW-->


@endsection
@section('import_scripts')
    <script src="{{asset('assets/admin/js/select2.full.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/js/bootstrap-toggle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bootstrap-fileinput.js') }}"></script>
    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
@endsection
@section('scripts')
    <script type="text/javascript">
        bkLib.onDomLoaded(function() {
            new nicEditor({fullPanel : true}).panelInstance('area1');
            new nicEditor({fullPanel : true}).panelInstance('area2');
        });
    </script>
    <script>
        $(function () {
            $('.select2').select2();
            $('#tag').select2({tokenSeparators: ','}).val({!! json_encode($product->tags()->allRelatedIds()) !!}).trigger("change");
            $('.color').select2().val({!! json_encode($product->colors()->allRelatedIds()) !!}).trigger("change");
            $('.size').select2().val({!! json_encode($product->sizes()->allRelatedIds()) !!}).trigger("change");
        });
        $('#category_id').on('change',function (e) {
            var category_id = e.target.value;
            var url = '{{ url('/') }}';
            $.get(url + '/subcategory-get?category_id=' + category_id,function (data) {

                if(data == ''){
                    var subcat = document.getElementById('subcat');
                    subcat.style.display='none';

                    var childcat = document.getElementById('childcat');
                    childcat.style.display='none';
                }else {
                    var subcat = document.getElementById('subcat');
                    subcat.style.display='block';

                    var childcat = document.getElementById('childcat');
                    childcat.style.display='none';
                }

                $('#subcategory_id').empty();
                $('#subcategory_id').append('<option class="bold" value="">Select One</option>');
                $.each(data,function (index,subcatObj) {
                    $('#subcategory_id').append('<option class="bold" value="'+subcatObj.id+'">'+subcatObj.name+'</option>');
                })
            });

            $.get(url + '/category-color?category_id=' + category_id,function (data) {

                $('#categoryColor').empty();
                $.each(data,function (index,subcatObj) {
                    $('#categoryColor').append('<option class="bold" value="'+subcatObj.id+'">'+subcatObj.name+'</option>');
                })
            });

            $.get(url + '/category-size?category_id=' + category_id,function (data) {
                $('#categorySize').empty();
                $.each(data,function (index,subcatObj) {
                    $('#categorySize').append('<option class="bold" value="'+subcatObj.id+'">'+subcatObj.name+'</option>');
                })
            });

        });
        $('#subcategory_id').on('change',function (e) {
            var subcategory_id = e.target.value;
            var url = '{{ url('/') }}';
            $.get(url + '/childcategory-get?subcategory_id=' + subcategory_id,function (data) {

                if(data == ''){
                    var childcat = document.getElementById('childcat');
                    childcat.style.display='none';
                }else {
                    var childcat = document.getElementById('childcat');
                    childcat.style.display='block';
                }

                $('#childcategory_id').empty();
                $('#childcategory_id').append('<option class="bold" value="">Select One</option>');
                $.each(data,function (index,subcatObj) {
                    $('#childcategory_id').append('<option class="bold" value="'+subcatObj.id+'">'+subcatObj.name+'</option>');
                })
            })
        });
    </script>
    <script>
        function preview_images()
        {
            document.getElementById("image_preview").innerHTML = "";
            var total_file=document.getElementById("images").files.length;
            for(var i=0;i<total_file;i++)
            {
                $('#image_preview').append("<div class='col-md-3'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
            }
        }
    </script>
    <script>

        @foreach($productSpecification as $i)
            $(document).ready(function () {
            $(document).on("click", '.delete_button{{$i->id}}', function (e) {
                $(this).parent().remove();
            });

        });
        @endforeach

        var wrapper = $("#wrapper");
        var addForm = $("#add-form");
        var index = 0;

        var getForm = function(index, action) {
            return $("<div class='form-group'><div class='col-sm-10'><input name='specification[]' value='' class='form-control bold' type='text' placeholder='Product Specification'></div><a href='#' class='remove btn btn-danger'><i class='fa fa-times'></i> Remove Field</a></div>");
        };

        addForm.on("click", function() {
            var form = getForm(++index);
            form.find(".remove").on("click", function() {
                $(this).parent().remove();
            });
            wrapper.append(form);
        });

    </script>
    <script>
        $(document).ready(function () {
            $(document).on("change", '#color_status', function (e) {
                var type = $(this).val();
                if (type == "0"){
                    var color = document.getElementById('color');
                    color.style.display='none';
                }else if (type == "1"){
                    var color = document.getElementById('color');
                    color.style.display='block';
                }
            });
            $(document).on("change", '#size_status', function (e) {
                var type = $(this).val();
                if (type == "0"){
                    var size = document.getElementById('size');
                    size.style.display='none';
                }else if (type == "1"){
                    var size = document.getElementById('size');
                    size.style.display='block';
                }
            });
        });
    </script>

@endsection

