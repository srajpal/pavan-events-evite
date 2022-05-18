<x-layouts.app>

    <x-main.client-sidebar />

    <x-layouts.auth>

        <x-main.navbar :breadcrumbs="['Client Dashboard', 'Guests']" title="Guests" />

        <div class="container-fluid py-2">

            <x-client.guest-table title="Guests" :guests=$guests :invite=false />

        </div>
    </x-layouts.auth>
</x-layouts.app>
