@if(!is_null($subjects))
    @foreach($subjects as $s)

    <div class="col-12 col-md-4 card-tutor">
        <a href="{{ URL::route('modules.detailTutor', $s->id) }}">
            <div class="block-relative">
                {{-- <img  src="{{asset('assets/thumbnail/'.$s->subject_image)}}" alt="{{$s->subject_image}}" class="img-fluid w-100 desktop">
                <img  src="{{asset('assets/thumbnailMobile/'.$s->subject_image)}}" alt="{{$s->subject_image}}" class="img-fluid w-100 mobile"> --}}

                <img src="{{asset('assets/tutorImage/tDesktop.svg')}}" alt="image course" class="w-100 img-fluid desktop pos-relative">
                <img src="{{asset('assets/tutorImage/tMobile.svg')}}" alt="image course" class="w-100 img-fluid mobile pos-relative">

                <h1 class="font-22 font-700 bg-white p-1 subject-title">
                    {{$s->subject_title}}
                </h1>


                <img src="{{asset('assets/tutorImage/'.$s->subject_tutor)}}" alt="" class="subject-image">

            </div>

        </a>
    </div>
    @endforeach
@else
    <div class="col-12">
        <p class="text-center">No data to display</p>
    </div>
@endif
