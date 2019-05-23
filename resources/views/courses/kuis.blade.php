@extends('layouts.app')

@section('content')
<div class="container">
    <title>{{ config('app.name', 'Portal Pembelajaran SMA 1 Semarang') }}</title>
<h1>Quiz</h1>
  <br>
  @foreach($course as $cour)
  <div class="card timbul5" style="height: 12rem">
    <div class="exploration-image mt-3 pb-3 d-flex">
      <div class="card-body">
        <h1>
          <a href="{{ url('/') }}">
            {!!$cour->isi_pertanyaan!!}
            {{-- {!!$cour->jawaban[0]!!} --}}
          </a>
        </h1>
        <div style="float: left;">
          @foreach ($cour->jawaban as $jawaban){
            <div class="form-check" >
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="optradio"><h4 class="ml-5">{!! $jawaban->isi_jawaban !!}</h4>
                </label>
            </div>
          }
          @endforeach
        </div>
      </div>
    </div>
  </div>
  @endforeach
  {{$course->links()}}
</div>
@endsection