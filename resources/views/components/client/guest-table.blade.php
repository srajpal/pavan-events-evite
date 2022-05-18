@props([
    'title' => '',
    'guests' => [],
    'createGuest' => true,
    'editGuests' => true,
    'invite' => false,
    'event' => null,
])

<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <div class="row">
                        <div class="col-6 text-start">
                            <h6 class="text-white text-capitalize ps-3">
                                {{ $title }}
                                @if ($invite)
                                    {{ ' for event: ' . $event->name }}
                                @endif
                            </h6>
                        </div>
                        @if (!$invite && $createGuest)
                            <div class="col-6 text-end pe-4">
                                <a class="btn bg-gradient-dark mb-0 " href="/client/guest/create">
                                    <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Create new Guest
                                </a>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
            <div class="card-body px-0 pb-2">

                @if ($createGuest && Session::has('success'))
                    <div class="alert alert-success mx-10 text-white text-sm">
                        {{ Session::get('success') }}
                    </div>
                @endif

                <div class="table-responsive p-2">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                @if ($invite)
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Invite</th>
                                @endif
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Name</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Email</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Phone</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    # Guests</th>
                                @if (!$invite)
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Events</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Options</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($guests as $guest)
                                <tr>
                                    @if ($invite)
                                        <td class="align-middle">
                                            <x-inputs.checkbox label="" id="invite" />
                                        </td>
                                    @endif
                                    <td class="align-middle">
                                        {{ $guest->name }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $guest->email }}
                                    </td>
                                    <td class="align-middle text-center">
                                        {{ $guest->phone }}
                                    </td>
                                    <td class="align-middle text-center">
                                        {{ $guest->guests }}
                                    </td>
                                    @if (!$invite)
                                        <td class="align-middle text-center">
                                            {{ count($guest->events) }}
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-primary"
                                                href="/client/guests/{{ $guest->id }}/edit">
                                                <i class="material-icons text-sm">edit</i>&nbsp;&nbsp;edit
                                            </a>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
