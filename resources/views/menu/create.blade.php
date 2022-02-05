{{--<button type="button" class="btn btn-primary" >
    Add item to the sidebar
</button>--}}
<x-buttons.btn-add
{{--    onclick="openFormAddInModal('menus')"--}}
    data-toggle="modal" data-target="#exampleModal"
>
    <x-slot name="title">Add new item</x-slot>
</x-buttons.btn-add>

<!-- Modal -->
<div class="modal fade"
     id="exampleModal"
     tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="add_menu_item">
            <form action="{{route('menus.store')}}" method="POST">
                @csrf
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <x-forms.input
                                class="required"
{{--                                label="Libelle"--}}
                                name="libelle"
                                placeholder="Libelle"></x-forms.input>
                        </div>
                        <div class="col">
                            <x-forms.input
                                class="required"
{{--                                label="Libelle ar"--}}
                                name="libelle_ar"
                                placeholder="Libelle ar"
                            ></x-forms.input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <x-forms.select
                                class="select2"
                                label="Parent"
                                name="parent_id"
                            >
                                <option value="0">First level</option>
                                @foreach(\App\Models\MenuItem::all() as $value)
                                    <option value="{{$value->id}}">{{$value->libelle}}</option>
                                @endforeach
                            </x-forms.select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <x-forms.input
{{--                                label="Url link"--}}
                                name="url_link"
                                placeholder="Url link"></x-forms.input>
                        </div>
                        <div class="col">
                            <x-forms.input
{{--                                label="Menu icon"--}}
                                name="menu_icon"
                                placeholder="Menu icon"></x-forms.input>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <x-buttons.btn-default
                        type="button" class="btn-secondary close-btn"
                        data-dismiss="modal">
                        <x-slot name="title">Close</x-slot>
                    </x-buttons.btn-default>
                    <x-buttons.btn-save>
                        <x-slot name="title">Save changes</x-slot>
                    </x-buttons.btn-save>
                </div>
            </form>
        </div>
    </div>
</div>
