
    <!--  Application Details Start -->
    <div class="w-full bg-grey-500">
        <div class="container mx-auto py-8">
            <div class="w-96 mx-auto bg-white rounded shadow">

                <div class="mx-16 py-4 px-8 text-black text-xl font-bold border-b border-grey-500">Reservation
                </div>

                <form wire:submit.prevent="submitReservation">
                    <div class="py-4 px-8">

                        <div class="mb-4">
                            <label class="block text-grey-darker text-sm font-bold mb-2">Name:</label>
                            <input wire:model="name" class=" border rounded w-full py-2 px-3 text-grey-darker" 
                            type="text" name="name" placeholder="Enter Your Name">
                     
                        </div>


                        <div class="mb-4">
                            <label class="block text-grey-darker text-sm font-bold mb-2">Number of Guests:</label>
                            <input wire:model="nb_guests" class=" border rounded w-full py-2 px-3 text-grey-darker" 
                            type="number" name="nb_guests" placeholder="Enter the Number of Guests">
                      
                        </div>


                        <div class="mb-4">
                            <label class="block text-grey-darker text-sm font-bold mb-2">Date:</label>
                            <input wire:model="date" class=" border rounded w-full py-2 px-3 text-grey-darker" 
                            type="date" name="date">
                            <p id=error_intake_year></p>
                        </div>

                        <div class="mb-4">
                            <button type="submit"
                                class="mb-2 mx-16 rounded-full py-1 px-24 bg-gradient-to-r from-green-400 to-blue-500 ">
                                Reserve
                            </button>
                        </div>

                    </div>
                </form>

            </div>

        </div>
    </div>
    <!--  Application Details End -->


   
                    </div>
                </form>

            </div>

        </div>
    </div>
    <!-- Student Visa End -->





<!-- <div>
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
 -->
