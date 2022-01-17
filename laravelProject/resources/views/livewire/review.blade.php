<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <form wire:submit.prevent="store">
        @csrf
        <p>
            <input type="text" wire:model="subject" placeholder="Subject">
            @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
        </p>
        <p><textarea wire:model="review" id="comment" cols="30" rows="10" placeholder="Your Review"></textarea></p>
        @error('review') <span class="text-danger">{{ $message }}</span> @enderror
        <p>
            <div class="rating">
                <strong>Your Rating:</strong>
                <input type="radio" id="5" wire:model="rate" value="5" /><label for="5">☆</label>
                <input type="radio" id="4" wire:model="rate" value="4" /><label for="4">☆</label>
                <input type="radio" id="3" wire:model="rate" value="3" /><label for="3">☆</label>
                <input type="radio" id="2" wire:model="rate" value="2" /><label for="2">☆</label>
                <input type="radio" id="1" wire:model="rate" value="1" /><label for="1">☆</label>
            </div>
            @error('rate') <span class="text-danger">{{ $message }}</span> @enderror
        </p>
        @auth
            <p><input type="submit" value="Submit"></p>
        @else
            <a href="/login" class="primary-btn">For Submit Your Review, Please Login</a>
        @endauth
    </form>
</div>
