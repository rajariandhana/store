<div class="flex flex-col gap-2 my-2">
    <p class="my-0 font-semibold">
        {{$name}}
    </p>
    <div class="flex gap-3">
        @foreach (explode($delimiter, $options) as $option)
            <label class="cursor-pointer">
                <input wire:model="{{$wireKey}}" type="radio" class="peer sr-only" name="{{$wireKey}}"
                    value="{{ $option }}" />
                <div
                    class="flex justify-center items-center rounded-md px-4 py-1 transition-all
            ring-1 ring-gray-400 hover:bg-gray-100
            peer-checked:ring-indigo-500 peer-checked:ring-offset-1">
                    {{ $option }}
                </div>
            </label>
        @endforeach

    </div>
    @error($wireKey)
        <span class="text-red-500 text-xs">
            {{$name}} is required
        </span>
    @enderror
</div>
