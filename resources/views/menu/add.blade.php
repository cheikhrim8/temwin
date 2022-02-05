<x-modal.modal-header-body class="bg-red">
    <x-slot name="title">{{ __('menu.add menu item') }}</x-slot>
    <x-card class="m-3 p-2">
        <div class="row">
            <div class="col-md-12" id="add_menu_item">
                <form class="" action="{{ url('menus/add') }}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col">
                            <x-forms.input
                                label="{{__('text.libelle')}}"
                                class="required"
                                name="libelle"
                                placeholder="{{__('text.libelle')}}"></x-forms.input>
                        </div>
                        <div class="col">
                            <x-forms.input
                                label="{{__('text.libelle_ar')}}"
                                class="required"
                                name="libelle_ar"
                                placeholder="{{__('text.libelle_ar')}}"
                            ></x-forms.input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <x-forms.select
                                class="select2"
                                label="{{__('menu.parent')}}"
                                name="parent_id"
                            >
                                <option value="0">{{__('menu.first level')}}</option>
                                @foreach(\App\Models\MenuItem::all() as $value)
                                    <option value="{{$value->id}}">{{$value->libelle}}</option>
                                @endforeach
                            </x-forms.select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <x-forms.input
                                label="{{__('menu.url link')}}"
                                name="url_link"
                                placeholder="{{__('menu.url link')}}"></x-forms.input>
                        </div>
                        <div class="col">
                            <x-forms.input
                                label="{{__('menu.menu icon')}}"
                                name="menu_icon"
                                placeholder="{{__('menu.menu icon')}}"></x-forms.input>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="text-right">
                                <x-buttons.btn-save
                                    onclick="addObject(this,'menus')"
                                    container="add_menu_item">
                                    {{ __('text.ajouter') }}
                                </x-buttons.btn-save>
                                <div id="form-errors" class="text-left"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </x-card>
</x-modal.modal-header-body>
