<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#7C53EC] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#6e41e9] focus:bg-[#6e41e9] active:bg-[#5a30d9] focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
