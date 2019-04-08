
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Edit Category
                        </h2>

                    </div>
                    <div class="body">
                        <form action=" {{route('blog.update',['blog' =>$blog->id])}}"   method="post"  enctype="multipart/form-data" >
                            {{ method_field('PUT') }}
                            @csrf
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="file" name="image" id="image" class="form-control" value="{{$blog->image}}">
                                    <label class="form-label">image</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="fulname" id="fulname" class="form-control" value="{{$blog->fulname}}">
                                    <label class="form-label">fulname</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="adress" id="adress" class="form-controlvalue="value="{{$blog->adress}}">
                                    <label class="form-label">adress</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="discription" id="discription" class="form-controlvalue="value="{{$blog->discription}}">
                                    <label class="form-label">description</label>
                                </div>
                            </div>
{{--                            <div class="form-group form-float">--}}
{{--                                <div class="form-line">--}}
{{--                                    <img style="width: 200px;" class="img-responsive" src="{{ asset('/images/'.$blog->image) }}">--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <select name="cate_id">
{{--                                        @foreach($catagories as $catagory)--}}
{{--                                            <option value="{{$catagory->id}}" >{{$catagory->name}}</option>--}}
{{--                                        @endforeach--}}
                                    </select>
                                </div>
                            </div>


                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Edit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>


    </div>
</section>