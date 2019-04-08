<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Blog
                        </h2>

                    </div>
                    <th><a href="{{route('blog.create')}}">create</a></th>
                    <div class="body table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>image</th>
                                <th>fulname</th>
                                <th>adress</th>
                                <th>description</th>
                                <th>Create_at</th>
                                <th>Updated_at</th>
                            </tr>

                            </thead>
                            <tbody>


                            @foreach($blogs as $blog)
                                <tr>
                                    <th scope="row">{{$blog->id}}</th>
                                    <th scope="row">{{$blog->image}}</th>
                                    <th scope="row">{{$blog->fulname}}</th>
                                    <th scope="row">{{$blog->adress}}</th>
                                    <th scope="row">{{$blog->discription}}</th>
{{--                                    <th scope="row"><img style="width: 200px;" class="img-responsive" src="{{ asset('/images/'.$data->image) }}">--}}
{{--                                    </th>--}}
                                    <th scope="row">{{$blog->created_at}}</th>
                                    <th scope="row">{{$blog->updated_at}}</th>
                                    <th scope="row">
                                    <td>
                                    </td>
                                    <td>
                                        <form action="{{route('blog.destroy',['blog' => $blog->id])}}" method="post">
                                            {{ method_field('delete') }}
                                            @csrf
                                            <a href="{{route('blog.edit',['blog' => $blog->id])}}">  <button  type="button" class="btn bg-brown waves-effect">Edit</button></a>

                                            <button type="submit" class="btn bg-red btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </form>
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