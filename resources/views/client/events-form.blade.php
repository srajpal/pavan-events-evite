<x-layouts.app>
    <x-main.client-sidebar />
    <x-layouts.auth>

        <x-main.navbar :breadcrumbs="['Client Dashboard', 'Events', 'Create Event']" title="Create New Event" />

        <div class="container-fluid py-2">

            <div class="row mb-4">
                <div class="col-md-12 mb-lg-0 mb-4">
                    <form method="post" action="/client/event/insert">
                        @csrf
                        <div class="card mt-4">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                    <div class="row">
                                        <div class="col-6 text-start">
                                            <h6 class="text-white text-capitalize ps-3">Event Information</h6>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <div class="row">
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        <x-inputs.text label="Event Name" id="name" />
                                    </div>
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        <x-inputs.select label="Event Type" id="event_type" :options="$eventTypes" key="id"
                                            value="name" />
                                    </div>
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        <x-inputs.datetime label="Event Start Date and Time" id="start_date_time" />
                                    </div>
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        <x-inputs.datetime label="Event End Date and Time" id="end_date_time" />
                                    </div>
                                    <div class="col-md-12 mb-md-0 mb-2">
                                        <x-inputs.text label="Event Host Name" id="host" />
                                    </div>
                                    <div class="col-md-12 mb-md-0 mb-2">
                                        <x-inputs.textarea label="Event Message from Host" id="message" />
                                    </div>
                                    <div class="col-md-12 mb-md-0 mb-3">
                                        <h4>Event Location</h4>
                                    </div>
                                    <div class="col-md-12 mb-md-0 mb-2">
                                        <x-inputs.text label="Location Name" id="location_name" />
                                    </div>
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        <x-inputs.text label="Address" id="location_address" />
                                    </div>
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        <x-inputs.text label="Address2" id="location_address2" />
                                    </div>
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        <x-inputs.text label="Event Location City" id="location_city" />
                                    </div>
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        <x-inputs.text label="Event Location State" id="location_state" />
                                    </div>
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        <x-inputs.text label="Zip" id="location_zip" />
                                    </div>
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        <x-inputs.text label="Phone" id="location_phone" />
                                    </div>
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        <x-inputs.text label="Email" id="location_email" />
                                    </div>
                                    <div class="col-md-6 mb-md-0 mb-2">
                                        <x-inputs.text label="Website URL" id="location_url" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-0 ">
                                <div class="row py-4">
                                    <div class="col-12 text-end pe-4">
                                        <button type="submit" class="btn bg-gradient-dark mb-0 ">
                                            <i class="material-icons text-sm">add</i>&nbsp;&nbsp;Create this
                                            Event
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
