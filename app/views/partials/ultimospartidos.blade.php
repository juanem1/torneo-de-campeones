@if ( isset($ultimospartidos) )
    <section class="transparent-bg">
        <div id="fixture">
                @foreach($ultimospartidos as $partido)
                    <div class="slide-content">
                        <div class="match-results">
                            <span>{{ $partido->team_a }}</span>
                            <span class="score">{{ $partido->results }}</span>
                            <span>{{ $partido->team_b }}</span>
                        </div>
                        <div class="match-place">
                            <span>{{ $partido->description }}</span>
                        </div>
                    </div>
                @endforeach
        </div>
        <div class="clear"></div>
    </section>
@endif
