@extends('frontend.layout.frontend')

@section('content')
    <section id="feature" >
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Conference Paper</h2>
                <p class="lead">
                    A vast number of conferences have been attended by our faculties and students.
                </p>
            </div>
        </div><!--/.container-->
    </section>

    <section id="recent-works faculty-detail">
        <div class="container">
            <div class="wow fadeInDown">

                @if(count($conferenceList))
                    <ul>
                        @foreach($conferenceList as $conference)
                            <li>
                                <a href="{{ url("/conference/{$conference->id}") }}">
                                    {{ $conference->name }} ({{ $conference->year }})
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <h1 class="text-center">
                        No Conference Paper Found
                    </h1>
                @endif

            </div>
        </div>
    </section>
@endsection