<div>
    <div class="container max-w-lg px-4 py-32 mx-auto text-left md:max-w-none md:text-center">
        <div class="mx-auto mt-5 text-gray-500 md:mt-12 md:max-w-lg md:text-center lg:text-lg">
           Color
        </div>
        @forelse ($getColorByUserId as $itemColor)
            <ul>
                <ol>
                    <button class="px-3 py-2 m-2 text-sm font-medium leading-4 text-white @if($itemColor->color_name == 'blue') bg-indigo-600 @elseif($itemColor->color_name == 'green') bg-green-500 @elseif($itemColor->color_name == 'pink') bg-pink-500 @elseif($itemColor->color_name == 'yellow') bg-yellow-500 @endif">
                        {{ $itemColor->color_name }}
                    </button>
                </ol>
            </ul>
        @empty
        <div class="flex flex-col items-center mt-12 text-center">
            <span class="relative inline-flex w-full md:w-auto">
                <form wire:submit.prevent='store'>
                @error('color_select') <span class="text-red-500">{{ $message }}</span> @enderror
                <div class="flex flex-wrap">
                        <div>
                            <input type="checkbox" wire:model='color_select.blue' class="form-checkbox text-indigo-600" value="blue">
                            <span class="ml-2 mr-2 text-indigo-600">Blue</span>
                        </div>
                        <div>
                            <input type="checkbox" wire:model='color_select.green' class="form-checkbox text-green-500" value="green">
                            <span class="ml-2 mr-2 text-green-500">Green</span>
                        </div>
                        <div>
                            <input type="checkbox" wire:model='color_select.pink' class="form-checkbox text-pink-600" value="pink">
                            <span class="ml-2 mr-2 text-pink-500">Pink</span>
                        </div>
                        <div>
                            <input type="checkbox" wire:model='color_select.yellow' class="form-checkbox text-yellow-600" value="yellow">
                            <span class="ml-2 mr-2 text-yellow-500">Yellow</span>
                        </div>
                        <div>
                            <button type="submit" class="px-3 py-2 text-sm font-medium leading-4 text-white bg-indigo-600 md:px-3 md:w-auto md:rounded-full lg:px-5 hover:bg-indigo-500 focus:outline-none md:focus:ring-2 focus:ring-0 focus:ring-offset-2 focus:ring-indigo-600">Save</button>
                        </div>
                </div>
                </form>
            </span>
        </div>
        @endforelse
    </div>
</div>
