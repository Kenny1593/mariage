<div>
    @foreach ($reels as $reel)
        <div style="margin-bottom: 20px;">
            <video width="300" controls>
                <source src="{{ asset('storage/' . $reel->video) }}" type="video/mp4">
                Votre navigateur ne supporte pas les vidéos.
            </video>
            <p>{{ $reel->description }}</p>
        </div>
    @endforeach
</div>

