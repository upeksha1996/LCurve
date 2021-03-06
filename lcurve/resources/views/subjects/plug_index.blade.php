@extends('layouts.app')
@section('dash-left')

<div class="row">
	<div >
    <div class="panel panel-default">
        <div class="panel-heading">
          <h3>@lang('applang.subjectsGiven')</h3>
          <hr style="border-color:#848991">
          <div class="panel-body">
            @foreach ($subjects as $subject)

              <div class="col-lg-2 subjects">
								<a href="{{ route('subjects.show', $subject->id ) }}">
                	<div class="subject_icon">
                    <img src="{{$subject->image}}"/>
                  </div>
                </a>
                <div>
                  {{$subject->name}}
                </div>
              </div>

            @endforeach
          </div>
        </div>
    </div>
  </div>
</div>

@endsection
