<button {{ $disabled ? 'disabled' : '' }} type="{{ $type }}" class="{{ $bgColor }} rounded-lg {{ $textColor }} p-[13px] hover:bg-dark-blue-300 disabled:bg-dark-blue-50 disabled:text-dark-blue-100 disabled:line-through {{ $class }}">
    {{ $slot }}
</button>
