<div>
    <form wire:submit.prevent="submitReservation">
        <div>
            <label>Name:</label>
            <input wire:model="name" type="text" name="name" >
            @error('name') <span>{{$message}}</span> @enderror
        </div>

        <div>
            <label>Number of Guests:</label>
            <input wire:model="nb_guests" type="number" name="nb_guests">
            @error('nb_guests') <span>{{$message}}</span> @enderror
        </div>

        <div>
            <label>Date:</label>
            <input wire:model="date" type="date" name="date">
            @error('date') <span>{{$message}}</span> @enderror
        </div>

        <div>
            <button type="submit">Reserve</button>  
        </div>

    </form>
</div>

