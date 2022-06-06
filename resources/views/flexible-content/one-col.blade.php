{{-- One Column blade --}}

<section class="container one-col" id="@sub('one_col_id')">
    <div class="row">
        <div class="col-10 one-col__wrapper">
          @hassub('one_col_header')
            <h2 class="text-center">
              @sub('one_col_header')
            </h2>
          @endfield
           @hassub('content')
            <div class="one-col__content text-center">
              @sub('content')
            </div>
          @endfield
        </div>
    </div>
</section>