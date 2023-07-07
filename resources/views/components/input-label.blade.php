@props(['value'])

<label {{ $attributes->class(['form-label p-0']) }}>
    {{ $value ?? $slot }}
</label>
