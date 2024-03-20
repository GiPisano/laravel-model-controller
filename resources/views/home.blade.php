@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">  
      <div class="row g-3">
        @forelse($movies as $Movie)
          <div class="col-6">
            <div class="card h-100">
              <div class="card-body">
                <h5>{{ $Movie->title}}</h5>
                <p><span>Original title:</span> {{ $Movie->original_title}}</p>
                <p><span>Nationality:</span>	{{ $Movie->nationality	}}</p>
                <p><span>Date:</span> {{ $Movie->date }}</p>
                <p><span>Vote:</span> {{ $Movie->vote }}</p>
              </div>
            </div>
          </div>
          @empty
          <div class="col-12">
            <p>Nessun film disponibile al momento.</p>
          </div>
        @endforelse

      </div>
    </div>
  </section>
@endsection
