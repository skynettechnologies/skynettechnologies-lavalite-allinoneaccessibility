@include('allinoneaccessibility::public.allinoneaccessibility.partial.header')
<section class="listing-page-wrap">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 left-sidebar" id="listing_data">
                @forelse($data as $allinoneaccessibility)
                <div class="listing-single-item d-flex align-items-center flex-wrap">
                    <div class="col-12 col-lg-5 p-0 listing-image">
                        <a href="{{trans_url('allinoneaccessibility')}}/{{$allinoneaccessibility['slug']}}">
                        <img src="{{url($allinoneaccessibility['image']['main'])}}" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col-12 col-lg-6 p-0 listing-text">
                        <div class="listing-content">
                            <h3><a href="{{trans_url('allinoneaccessibility')}}/{{$allinoneaccessibility['slug']}}">{{$allinoneaccessibility['title']}}</a></h3>
                            <div class="listing-metas">
                                <span>By <a
                                        href="{{trans_url('allinoneaccessibility')}}/{{$allinoneaccessibility['slug']}}">{{$allinoneaccessibility['owner']}}</a></span>
                                <span><a
                                        href="{{trans_url('allinoneaccessibility')}}/{{$allinoneaccessibility['slug']}}">{{$allinoneaccessibility['category']}}</a></span>
                            </div>
                            <p>{{ Str::limit($allinoneaccessibility['description'],300 )}}</p>
                        </div>
                        <a href="{{trans_url('allinoneaccessibility')}}/{{$allinoneaccessibility['slug']}}" class="btn btn-theme">Continue Reading</a>
                    </div>
                </div>
                @empty
                @endif
                <nav class="pagination-wrap mb-50" aria-label="Page navigation example">
                    <ul class="pagination">
                        {!!view('paginator', compact('meta'))!!}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
