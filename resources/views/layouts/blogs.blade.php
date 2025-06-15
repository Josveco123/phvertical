<div id="blog" class="flex flex-col w-full h-auto mt-20  sm:px-10">
    <div class="w-full h-auto flex flex-row justify-center items-center ">
        <div
            class="max-w-fit  h-auto flex flex-row justify-center items-center  border-b-2 border-black bg-white rounded-full ">
            <img class="h-[5vh] w-auto mr-5"src="{{ asset('images/cafee rojo.png') }}" alt="">
            <span class="flex flex-row justify-center text-lg md:text-lg lg:text-2xl text-red-600 font-titulo4 font-bold">BLOGS</span>
            <img class="h-[5vh] mr-5"src="{{ asset('images/cafee rojo.png') }}" alt="">
        </div>
    </div>

    <div id="blogs" class="w-full h-full grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-y-10 gap-x-10 pt-10 pr-10 px-10 pb-10">
        @foreach ($blogs as $blog)
            <div class="w-auto h-full border-1 pt-1 pr-1 bg-red-300" style="border-radius: 3vw;">
                <div class="w-full h-full p-4 border-1 bg-gray-50" style="border-radius: 3vw;">
                    <div class="w-full text-center text-black font-bold font-titulo2 text-md">{{ $blog->titulo }}</div>
                    <img class="float-left mr-4 mb-2 h-36 w-36 xl:h-48 xl:w-48 object-cover object-center" style="border-radius: 3vw;"
                        src="{{ asset("imagenblog/{$blog->imagen}") }}" alt="Descripción de la imagen">
                    <p class="text-justify mt-4 font-mote text-md "> {!! nl2br(e($blog->descripcion)) !!}</p>
                    <p class="text-sm text-center mt-4 font-biografia1 font-weight-normal">
                        <span class="font-bold ">{{ $blog->bibliografia }}</span>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</div>
