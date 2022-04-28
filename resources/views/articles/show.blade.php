         @extends('base')

         @section('content')

         <div class="background-blog background-cover background-center background-fixed w-100vw mb-5 d-flex align-items-end w-100">
             <div  class="bg-white px-3 bg-section-circle bg-section-circle-bottom-left">
                <h1 class="text-left pt-3 pb-2 pr-0 font-weight-light big-size-font color-black mr-auto">
                    Blog
                </h1>
             </div>
            
         </div>

         <div class="row px-2 w-100 m-0">

            @php 
                $i =0;
            @endphp
         @foreach ($articles as $key => $article)
            <div class="col-md-6 mb-5">
                <a href="/articles/{{$article->url}}">
                

                    @if ($i%2==0)
                    <div class="background-cover w-100 post-in-posts bg-section-circle-bottom-left" style="background:url('/img/{{ $article->thumbnail }}')">
                        <div class="position-relative box-post bg-white px-3 bg-section-circle bg-section-circle-bottom-left">
                            <h2 class="text-left pt-3 pb-2 pr-0 font-weight-light font-blog-h color-black mr-auto">{{ mb_strimwidth($article->title, 0, 30) }}</h2>

                            <div class="description">
                                <p class="medium-size-blog color-black">
                                    {!!  mb_strimwidth($article->description, 0, 100); !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    @php $i++; @endphp
                    @else
                    <div class="background-cover w-100 post-in-posts bg-section-circle-bottom-right" style="background:url('/img/{{ $article->thumbnail }}')">
                        <div class="position-relative box-post bg-white px-3 bg-section-circle bg-section-circle-bottom-right ml-auto">
                            <h2 class="text-right pt-3 pb-2 pr-0 font-weight-light font-blog-h color-black mr-auto">{{ mb_strimwidth($article->title, 0, 30) }}</h2>

                            <div class="description text-right">
                                <p class="medium-size-blog color-black">
                                    {!!  mb_strimwidth($article->description, 0, 100); !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    @php $i++; @endphp
                    @endif

                    
       

                </a>
            </div>
        {{-- @section('content') --}}
        
            
        

        {{-- @if($article->thumbnail)
        <img width="150" src="/img/{{ $article->thumbnail }}"> --}}
        
        
        {{-- @endif --}}
        
        @endforeach

    </div>
        @endsection
            
            
            

