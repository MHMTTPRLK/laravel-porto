
    <section class="section section-default section-no-border mt-none">
        <div class="container">
            <div class="row mb-xl">
                <div class="col-md-7">
                    <h2 class="mt-xl mb-none">Who We Are</h2>
                    <div class="divider divider-primary divider-small mb-xl">
                        <hr>
                    </div>
                    <p class="mt-lg">
                        {!! substr($abouts->about_content,0,500).'..'!!}
                    </p>

                    <a class="mt-md" href="{{route('about')}}">Learn More <i class="fa fa-long-arrow-right"></i></a>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <h4 class="mt-xl mb-none">Our Commitment</h4>
                    <div class="divider divider-primary divider-small mb-xl">
                        <hr>
                    </div>
                    <p class="mt-lg">
                        {!! $abouts->about_vizyon !!}
                    </p>

                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-12 center">
                <h2 class="mt-xl mb-none">Latest News</h2>
                <div class="divider divider-primary divider-small divider-small-center mb-xl">
                    <hr>
                </div>
            </div>
        </div>
        <div class="row mt-xl">
            @foreach($newss as $new)
            <div class="col-md-6">

							<span class="thumb-info thumb-info-side-image thumb-info-no-zoom mb-xl">
								<span class="thumb-info-side-image-wrapper p-none hidden-xs">
									<a title="" href="{{route('newsDetail',$new->id)}}">
										<img src="{{$new->image}}" class="img-responsive" alt="" style="width: 195px;">
									</a>
								</span>
								<span class="thumb-info-caption">
									<span class="thumb-info-caption-text">
										<h2 class="mb-md mt-xs"><a title="{{$new->slug}}" class="text-dark" href="{{route('newsDetail',$new->id)}}">{{$new->title}}</a></h2>
										<span class="post-meta">
											<span>{{$new->created_at->format('d-m-Y')}}| <a href="#">{{$new->author}}</a></span>
										</span>
										<p class="font-size-md">{!! substr($new->content,3,250) !!}</p>
										<a class="mt-md" href="{{route('newsDetail',$new->id)}}">Read More <i class="fa fa-long-arrow-right"></i></a>
									</span>
								</span>
							</span>

            </div>
            @endforeach

        </div>
    </div>

    
</div>
