<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Social>Create</h2>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Created Social
                        </h2>

                    </div>
                    <div class="body">
                        <form  action="{{ route('blog.store') }}"   method="post"  enctype="multipart/form-data" >
                            @csrf


                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="image" id="image" class="form-control" value="">
                                    <label class="form-label">image</label>
                                </div>
                            </div>


                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="fulname" id="fulname" class="form-control">
                                    <label class="form-label">fulname</label>
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="adress" id="adress" class="form-control">
                                    <label class="form-label">adress</label>
                                </div>
                            </div><div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="discription" id="discription" class="form-control">
                                    <label class="form-label">description</label>
                                </div>
                            </div>

                            <br>

                            <button type="submit" class="btn btn-success waves-effect">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>