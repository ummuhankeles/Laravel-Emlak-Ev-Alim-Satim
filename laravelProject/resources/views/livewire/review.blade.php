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
            <div class="stars">
                <strong class="mr-2">Your Rating:</strong>
                <input type="radio" id="star5" wire:model="rate" value="5" /><label for="star5"></label>
                <input type="radio" id="star4" wire:model="rate" value="4" /><label for="star4"></label>
                <input type="radio" id="star3" wire:model="rate" value="3" /><label for="star3"></label>
                <input type="radio" id="star2" wire:model="rate" value="2" /><label for="star2"></label>
                <input type="radio" id="star1" wire:model="rate" value="1" /><label for="star1"></label>
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
