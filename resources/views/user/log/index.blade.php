@extends('user.main')
@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
@endpush
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script src="/js/user/log/index.js" type="text/javascript"></script>
@endpush
@section('content')
    <div>
        @include('user.subheader')
        @include('user.profile.bar')
        <div class="container mx-auto px-2 md:px-4 lg:px-0 py-5">
            <div class="grid grid-cols-1 lg:grid-cols-12 md:gap-3 lg:gap-3">
                @include('user.log.sidebar')
                <div class="col-span-10 mt-5 md:mt-0 lg:mt-0">
                    <section>
                        <div class="">
                            <div class="grid grid-cols-1 pb-10">
                                <div>
                                    <div class="flex">
                                        <h3 class="text-3xl">Volunteer Hours</h3>
                                    </div>
                                    <div class="shadow-sm DataTable_container__QZVJC">
                                        <div class="row m-2 pt-2 pb-2">
                                            <div class="flex justify-end items-center">
                                                <div class="inline-flex mr-2" role="group"
                                                    aria-label="Button group with nested dropdown">
                                                    <a href="#modalAdd" rel="modal:open" type="button"
                                                    style="background-color:#000E7B"
                                                        class="inline-flex w-full rounded justify-center bg-primary px-4 py-2.5 text-sm font-medium text-white">
                                                        Add My Volunteer Hours
                                                    </a>
                                                    <div role="group" class="ml-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <input hidden value="{{ route('users.profile.getLogData') }}" id="logData">
                                            <table class="table table-bordered" id="logTable" style="width: 100%">
                                                <thead>
                                                    <tr>
                                                        <th>DATE</th>
                                                        <th>ORGANIZATION/DESCRIPTION</th>
                                                        <th>TIME</th>
                                                        <th>HOURS</th>
                                                        <th>CONTACT DETAILS</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div id="modalAdd" class="modal" style="min-width: 50%">
        @include('user.log.modal.create', ['service_types' => $service_types])
    </div>
    <div id="modalEdit" class="modal" style="min-width: 50%">
        @include('user.log.modal.edit', ['service_types' => $service_types])
    </div>
    <div id="modalDelete" class="modal" style="min-width: 50%">
        @include('user.log.modal.remove', ['service_types' => $service_types])
    </div>
    <a type="button" class="open-edit" href="#modalEdit" rel="modal:open"></a>
    <a type="button" class="open-delete" href="#modalDelete" rel="modal:open"></a>
@endsection
