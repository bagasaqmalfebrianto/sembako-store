<div class="">
    <div class="drop-shadow-[0_5px_2px_rgba(0,0,0,0.25)]">
        <ul class="mb-3">
            @foreach ($berita as $brt )
                <li class="mb-3">
                    <a href="/rincian_berita/{{ $brt->slug }}">
                        <div class="mt-5 w-full flex flex-col md:flex-row">
                            <div class="w-full md:w-1/5 px-3 md:px-0">
                                <img src="https://source.unsplash.com/500x400?ball" alt="gambar" class="w-full rounded-xl">
                            </div>

                            <div class="w-full md:w-4/5 px-5 py-3 md:py-0">
                                <div>
                                    <h1 class="font-bold text-xl pb-1 hover:text-teal-700">{{ $brt->title }}</h1>
                                </div>
                                <div>
                                    <p>{!! Str::limit($brt->body, 600)!!}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>



