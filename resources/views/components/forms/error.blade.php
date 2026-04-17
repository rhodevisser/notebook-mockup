@props([
    'name' => 'required'
])

@error($name)
    <p class="text-red-500 text-xs mt-5"> {{$message}} </p>
@enderror
