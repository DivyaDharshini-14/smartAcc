<button {{$attributes}}
    class="px-4 py-2 rounded-lg bg-gradient-to-r from-green-500 to-teal-600 text-white shadow-md flex items-center gap-2 hover:scale-105 transition-transform">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                               stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                               class="icon icon-tabler icons-tabler-outline icon-tabler-file-spreadsheet"><path
                                stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4"/><path
                                d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"/><path
                                d="M8 11h8v7h-8z"/><path d="M8 15h8"/><path d="M11 11v7"/></svg></span>
    <span class="font-semibold">{{$slot}}</span>
</button>
