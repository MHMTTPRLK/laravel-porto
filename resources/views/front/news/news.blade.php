@extends('front.layout.master')
@section('title','News')
@section('content')
<div role="main" class="main col-md-12 " >
<div class="container" style="padding-left: 100px">
    <div class="row pt-xl">

        <div class="col-md-9">

            <h1 class="mt-xl mb-none">News</h1>
            <div class="divider divider-primary divider-small mb-xl">
                <hr>
            </div>
            @foreach($news as $new)
            <div class="row">
                <div class="col-md-12">

									<span class="thumb-info thumb-info-side-image thumb-info-no-zoom mt-xl">
										<span class="thumb-info-side-image-wrapper p-none hidden-xs">
											<a title="{{$new->slug}}" href="{{route('newsDetail',$new->id)}}">
												<img src="{{asset($new->image)}}" class="img-responsive" alt="{{$new->slug}}" style="width: 200px; height: 100px;">
											</a>
										</span>
										<span class="thumb-info-caption">
											<span class="thumb-info-caption-text">
												<h2 class="mb-md mt-xs"><a title="{{$new->slug}}" class="text-dark" href="{{route('newsDetail',$new->id)}}">{{$new->title}}</a></h2>
												<span class="post-meta">
													<span>{{$new->created_at->format('d-m-Y')}}| <a href="#">{{$new->author}}</a></span>
                                                    <br>
                                                    <span><i class=""></i> Category:<a href="">{{$new->getCategory->name}}</a></span>
												</span>
												<p class="font-size-md">{!! substr($new->content,3,800) !!}</p>
												<a class="mt-md" href="{{route('newsDetail',$new->id)}}">Oku Beni<i class="fa fa-long-arrow-right"></i></a>
											</span>
										</span>
									</span>

                </div>
            </div>
            @endforeach

            <br>


        </div>
        <!--SideBar-->
        <div class="col-md-3">
            <aside class="sidebar">
                <div class="card">
                    <div class="card-header">
                        Kategoriler
                    </div>
                    <div class="list-group">
                        @foreach($categorys as $category)
                            <li class="list-group-item  @if(Request::segment(2)==$category->slug) active @endif ">
                                <a   @if(Request::segment(2)!=$category->slug) active  href="{{route('category',$category->slug)}}" @endif>{{$category->name}}<span class="badge bg-success float-right text-white">
                     {{$category->newsCount()}}
                    </span></a>
                            </li>
                        @endforeach
                    </div>


                </div>



            </aside>
        </div>
    </div>

</div>
</div>

@endsection
