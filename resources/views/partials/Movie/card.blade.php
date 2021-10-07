 <div class="card m-2 bg-light shadow col-3 ">
     <div class="card-body text-center">
         <a href="{{ route('show', ['id' => $movie->id]) }}">
             <h5 class="card-title">{{ $movie->title }}</h5>
         </a>
         <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
         <p>Lang: {{ $movie->nationality }}</p>
         <p>Data: {{ $movie->date }}</p>
         <p>Vote: {{ $movie->vote }}</p>
     </div>
 </div>
