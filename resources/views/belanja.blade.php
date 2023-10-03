@extends('layout.main')

@section('container')
    {{-- @include("konten.iklan") --}}

    <ul class="flex justify-between mt-10">
        <li>
            <a href="#" class="font-bold text-lg text-green_button">Produk Trending</a>
        </li>
        <li>
            <a href="#" class="font-bold text-lg text-green_button">SELENGKAPNYA</a>

        </li>
    </ul>

    <hr class="border-t border-black mb-4">

    <div class="carousel w-full mt-10">
        @foreach($nama_barang as $nb)
            <div id="item{{$loop->iteration}}" class="carousel-item w-full">
                {{-- GANTI SRC IMAGE DIBAWAH INI --}} {{-- {{ asset('storage/' . $nb->image) }} --}}
                <img src="https://source.unsplash.com/500x400?ball" class="w-full md:w-1/2 mx-auto" />
            </div>
        @endforeach
    </div> 

    <div class="flex justify-center w-full py-2 gap-2 mb-10">
        @foreach($nama_barang as $nb)
        <a href="#item{{$loop->iteration}}" class="btn btn-xs">{{$loop->iteration}}</a>
        @endforeach
    </div>

    <div class="w-full">
        <img src="/images/iklan1.png" alt="iklan" class="w-full h-200">
    </div>

    {{-- @include("konten.iklan") --}}

    <div class="my-4">
        <ul class=" ">
            <li>
                <a href="#" class="font-bold text-lg text-green_button">Rekomendasi</a>
            </li>
        </ul>

        <hr class="border-t border-black">
    </div>

    @if($nama_barang->count())
        <div class="drop-shadow-[0_5px_2px_rgba(0,0,0,0.25)] mt-3 flex justify-center items-center">
            <ul id="data-wrapper" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">

                @include('child')

            </ul>
        </div>
    @else
        <p class="text-center fs-4"> NO POST FOUND</p>
    @endif

    <div class="auto-load flex justify-center mt-4" style="display: none;">
        <span class="loading loading-spinner text-primary"></span>
    </div>



    <div class="flex justify-center m-10" id="button-wrapper">
        <div class="bg-green_button px-10 py-2 rounded-full text-white">
            <ul>
                <li>
                    <a href="javascript:void(0)" id="loadMoreButton">Selengkapnya</a>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('script')
<script>
    $(document).ready(function(){
        $('.new-arrivels-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            dots: false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        });
    });
</script>
@endsection




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var page = 1;
        $("#loadMoreButton").click(function() {
            page++;
            loadMoreData(page);
        });
    });

    function loadMoreData(page) {
        $.ajax({
                url: '?page=' + page,
                type: "get",
                beforeSend: function() {
                    $('.auto-load').show();
                    $('#button-wrapper').hide();
                }
            })
            .done(function(data) {
                if (data.html == " ") {
                    $('.auto-load').html("No records!");
                    return;
                }
                $('.auto-load').hide();
                $('#button-wrapper').show();
                $("#data-wrapper").append(data.html);
            })
    }
</script>
