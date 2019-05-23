@extends('admin.index')

@section('content')
    <a href="/materi" class="btn btn-primary">Go Back</a>
    <hr>
    <h1>Materi</h1>
    <div>
        {!!$materi->konten_materi!!}
        <a href="{{url('/kuis', $materi->id)}}" class="btn btn-primary">Go to Quiz</a>
    </div>
    <div>
        {{-- {!!$materi->mapels_id!!} --}}
    </div>

@endsection


