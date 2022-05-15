<x-layouts.app>
    <x-main.client-sidebar />
    <x-layouts.auth>

        <x-main.navbar :breadcrumbs="['Client Dashboard', 'Guests', isset($edit) && $edit ? 'Edit Guest' : 'Create Guest']" :title="isset($edit) && $edit ? 'Edit Guest' : 'Create New Guest'" />

        <div class="container-fluid py-2">

            <div class="row mb-4">
                <div class="col-md-12 mb-lg-0 mb-4">
                    <form method="post"
                        action="{{ isset($edit) && $edit ? '/client/guests/' . $guest->id . '/update' : '/client/guest/store' }}">
                        @csrf
                        @if ($edit ?? false)
                            @method('PUT')
                        @endif
                        <div class="card mt-4">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                    <div class="row">
                                        <div class="col-6 text-start">
                                            <h6 class="text-white text-capitalize ps-3">Guest Information</h6>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        <x-inputs.text label="Guest Name *" id="name" :value="$guest->name ?? ''"
                                            :required=true />
                                    </div>
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        <x-inputs.text label="Guest Email *" id="email" :value="$guest->email ?? ''" :required=true
                                            placeholder="ex: email@domain.com" />
                                    </div>
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        <x-inputs.text label="Guest Phone" id="phone" :value="$guest->phone ?? ''" :required=false
                                            placeholder="ex: 555-555-5555" />
                                    </div>
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        <x-inputs.select label="# of Guests *" id="guests" :selected="$guest->guests ?? ''"
                                            :options="$guestsOptions" key="id" value="val" :required=true />
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-0 ">
                                <div class="row py-4">
                                    <div class="col-12 text-end pe-4">
                                        <button type="submit" class="btn bg-gradient-dark mb-0 ">
                                            @if ($edit)
                                                <i class="material-icons text-sm">edit</i>&nbsp;&nbsp;Update this Guest
                                            @else
                                                <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Create this Guest
                                            @endif
                                        </button>
                                    </div>
                                </div>

                            </div>
                    </form>
                </div>
            </div>
        </div>


        </div>
    </x-layouts.auth>
</x-layouts.app>
