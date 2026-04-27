@props([
    'name' => 'required'
])

@error($name)
    <p class="text-error text-xs mt-5"> {{$message}} </p>
@enderror
