<div>
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <form wire:submit.prevent="save">
            <input type="file" wire:model="video">
            <button type="submit">Publier</button>
        </form>
    </div>
</div>
