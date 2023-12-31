{{-- Navigation Bar --}}
{{-- Active: bg-gray-800 text-white, Not active: text-white/50 --}}
<div class="nav-bar flex flex-col">
    {{-- Common Nav Menu --}}
    <nav class="nav-bar-menu flex flex-col">
        <a class="nav-item main-menu smooth-hover" href="{{route('mainmenu')}}" data-tooltip-target="main-menu-tooltip" data-tooltip-style="light" data-tooltip-placement="right">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="md:w-6 md:h-6 lg:w-6 lg:h-6 sm:w-2 sm:h-2">
                <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0
                    00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
            </svg>            
        </a>

        <a class="nav-item datatable-menu smooth-hover" href="{{route('datatable')}}" data-tooltip-target="datatable-menu-tooltip" data-tooltip-style="light" data-tooltip-placement="right">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="md:w-6 md:h-6 lg:w-6 lg:h-6 sm:w-2 sm:h-2">
                <path fill-rule="evenodd" d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875
                1.875H3.375A1.875 1.875 0 011.5 18.375V5.625zM21 9.375A.375.375 0 0020.625 9h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375
                0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0
                3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zM10.875 18.75a.375.375 0
                00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5zM3.375 15h7.5a.375.375 0 00.375-.375v-1.5a.375.375
                0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375zm0-3.75h7.5a.375.375 0 00.375-.375v-1.5A.375.375 0 0010.875 9h-7.5A.375.375 0
                003 9.375v1.5c0 .207.168.375.375.375z" clip-rule="evenodd" />
            </svg>
        </a>

        <a class="nav-item chart-menu smooth-hover" href="{{route('chart')}}" data-tooltip-target="chart-menu-tooltip" data-tooltip-style="light" data-tooltip-placement="right">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="md:w-6 md:h-6 lg:w-6 lg:h-6 sm:w-2 sm:h-2">
                <path d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75
                    8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3
                    13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z" />
            </svg>
        </a>

        <a class="nav-item achive-menu smooth-hover" href="{{route('logging')}}" data-tooltip-target="archive-menu-tooltip" data-tooltip-style="light" data-tooltip-placement="right">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="md:w-6 md:h-6 lg:w-6 lg:h-6 sm:w-2 sm:h-2">
                <path d="M3.375 3C2.339 3 1.5 3.84 1.5 4.875v.75c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875v-.75C22.5 3.839 21.66 3 20.625 3H3.375z" />
                <path fill-rule="evenodd" d="M3.087 9l.54 9.176A3 3 0 006.62 21h10.757a3 3 0 002.995-2.824L20.913 9H3.087zm6.163 3.75A.75.75 0 0110 12h4a.75.75 0 010 1.5h-4a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
            </svg>            
        </a>
    </nav>

    {{-- Bottom Nav Menu --}}
    <div class="nav-bar-menu flex flex-col">
        <a class="nav-item about-me smooth-hover" href="#" data-tooltip-target="about-me-tooltip" data-tooltip-style="light" data-tooltip-placement="right">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="md:w-6 md:h-6 lg:w-6 lg:h-6 sm:w-2 sm:h-2">
                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm8.706-1.442c1.146-.573 2.437.463
                    2.126 1.706l-.709 2.836.042-.02a.75.75 0 01.67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 11-.671-1.34l.041-.022zM12 9a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
            </svg>            
        </a>
        
        <a class="nav-item account-setting smooth-hover" href="#" data-tooltip-target="account-setting-tooltip" data-tooltip-style="light" data-tooltip-placement="right">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="md:w-6 md:h-6 lg:w-6 lg:h-6 sm:w-2 sm:h-2">
                <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75
                    0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
            </svg>            
        </a>

        <a class="nav-item log-out smooth-hover" href="{{route('homepage')}}" data-tooltip-target="log-out-tooltip" data-tooltip-style="light" data-tooltip-placement="right">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="md:w-6 md:h-6 lg:w-6 lg:h-6 sm:w-2 sm:h-2">
                <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3
                    3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm5.03 4.72a.75.75 0 010 1.06l-1.72 1.72h10.94a.75.75 0 010 1.5H10.81l1.72 1.72a.75.75 0 11-1.06
                    1.06l-3-3a.75.75 0 010-1.06l3-3a.75.75 0 011.06 0z" clip-rule="evenodd" />
            </svg>            
        </a>
    </div>
</div>

{{-- Tooltips --}}
<div>
    <div id="main-menu-tooltip" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
        Overview
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>

    <div id="datatable-menu-tooltip" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
        Datatable
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>

    <div id="chart-menu-tooltip" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
        Chart Plotting
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>

    <div id="archive-menu-tooltip" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
        Achive / Logging
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>

    <div id="about-me-tooltip" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
        About Me
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>

    <div id="account-setting-tooltip" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
        Setting
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>

    <div id="log-out-tooltip" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
        Log Out
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
</div>