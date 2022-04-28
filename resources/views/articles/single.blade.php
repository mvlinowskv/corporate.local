@extends('base')

         @section('content')
         <div class="container-single-blog background-fixed d-flex align-items-end background-cover background-center" style="background:url('/img/{{ $article->thumbnail }}')">
            <div class="single-box-post bg-white px-3 bg-single-post-circle bg-section-circle bg-section-circle-bottom-left">
                <h1 class="text-left pt-3 pb-2 pr-0 font-weight-light font-blog-h color-black mr-auto">
                    {{ mb_strimwidth($article->title, 0, 30) }}
                </h1>

                <div class="description w-90">
                    <p class="medium-size-blog color-black">
                        {!! $article->description !!}
                    </p>
                </div>
            </div>
         </div>
         

         

         @endsection