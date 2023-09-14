@extends('client.master')
@section('content')
 <!-- movie-details-area -->
 <section class="movie-details-area" data-background="/assets_client/img/bg/movie_details_bg.jpg">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="col-xl-3 col-lg-4">
                <div class="movie-details-img">
                    <img width="250px"  src="{{ isset($chuyenxe) ? $chuyenxe->avatar : '' }}" alt="">
                    <a href="{{ isset($chuyenxe) ? $chuyenxe->trailer : '' }}" class="popup-video"><img src="/assets_client/img/images/play_icon.png" alt=""></a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-8">
                <div class="movie-details-content">
                    <h2><span>{{ isset($chuyenxe) ? $chuyenxe->ten_nha_xe : '' }}</span></h2>
                    <div class="banner-meta">
                        <ul>
                            <li class="category">
                                <a href="#">Nơi Xuất Phát : {{ isset($chuyenxe) ? $chuyenxe->noi_xuat_phat : '' }},</a>
                            </li>
                            <li class="category">
                                <a href="#">Nơi Kết Thúc : {{ isset($chuyenxe) ? $chuyenxe->noi_ket_thuc : '' }}</a>
                            </li>
                            <li class="release-time">
                                <span><i class="far fa-calendar-alt"></i> {{ isset($chuyenxe) ? Carbon\Carbon::parse($chuyenxe->ngay_bat_dau_chay)->format('d/m/Y') : '' }},</span>
                                <span><i class="far fa-clock"></i> {{ isset($chuyenxe) ? $chuyenxe->thoi_gian_chay : '' }} min</span>
                            </li>
                        </ul>
                    </div>
                    <span>{{ isset($chuyenxe) ? $chuyenxe->mo_ta : '' }}</span>
                    <div class="movie-details-prime mt-3">
                        @foreach ($lichChieu as $key => $value)
                        <a href="/client/dat-ve/{{$value->id}}" class="m-2 banner-btn btn wow fadeInUp">{{ Carbon\Carbon::parse($value->thoi_gian_bat_dau)->format('H:i d/m/Y')  }}</a>
                        @endforeach
                        <ul>
                            <li class="share"><a href="#"><i class="fas fa-share-alt"></i> Share</a></li>
                            <li class="streaming">
                                <h6>Trailer</h6>
                                <span>Streaming Channels</span>
                            </li>
                            <li class="watch"><a href="{{ isset($chuyenxe) ? $chuyenxe->trailer : '' }}" class="btn popup-video"><i class="fas fa-play"></i> Watch Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="movie-details-btn">
                <a href="/assets_client/img/poster/movie_details_img.jpg" class="download-btn" download="">Download <img src="fonts/download.svg" alt=""></a>
            </div>
        </div>
    </div>
</section>
<!-- movie-details-area-end -->

@endsection
