<h2 class="text-lg flex justify-between items-center font-medium leading-6 p-4 text-gray-900"
    id="headlessui-dialog-title-:rba:" data-headlessui-state="open"
    style="border-bottom-width: 0.5px; border-bottom-color: rgb(187, 195, 207);">
    <p class="text-secondary font-semibold">Delete Volunteer Hours</p>
</h2>
<div class="p-4" id="headlessui-description-:rbb:" data-headlessui-state="open">
    <div>
        <div>
            <div>
                <form name="a-form" id="form-volunteer_delete" action="{{ route('volunteers.create') }}" method="POST">
                  <div class="modal-body">
                    <h6>Do you want to delete this?</h6>
                  </div>
                  <div class="modal-footer">
                    <button id="btn-remove" class="btn btn-success">Delete</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal">
                      Exit
                    </button>
                  </div>
                    <input type="hidden" id="id_delete"/>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
