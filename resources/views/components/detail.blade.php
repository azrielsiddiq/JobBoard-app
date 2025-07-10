@props(['label', 'value'])

<div>
    <dt class="text-sm text-gray-500">{{ $label }}</dt>
    <dd class="text-base font-medium text-gray-800">{{ $value ?? '-' }}</dd>
</div>
