<x-layouts.app>

    <x-main.client-sidebar />

    <x-layouts.auth>

        <x-main.navbar :breadcrumbs="['Client Dashboard', 'Guests', 'Invite']" title="Guest Invites" />

        <div class="container-fluid py-2">

            <x-client.guest-table title="Guests" :guests=$guests :invite=true :event=$event />

        </div>
    </x-layouts.auth>
</x-layouts.app>
