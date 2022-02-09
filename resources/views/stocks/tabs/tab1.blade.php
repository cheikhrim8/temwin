<x-card class="m-3 p-2">
    <div class="row ">
        <div class="col-md-12">
            <form class="" action="{{ url('menus/edit') }}" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col">
                        <x-forms.input
                            label="{{__('text.libelle')}}"
                            class="required"
                            name="libelle"
                            placeholder="{{__('text.libelle')}}"
                            value="{{$menu->libelle}}"
                        ></x-forms.input>
                    </div>
                    <div class="col">
                        <x-forms.input
                            label="{{__('text.libelle_ar')}}"
                            class="required"
                            name="libelle_ar"
                            placeholder="{{__('text.libelle_ar')}}"
                            value="{{$menu->libelle_ar}}"
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
                            @foreach($menus as $value)
                                <option value="{{$value->id}}"
                                        @if($value->id == $menu->parent_id) selected @endif
                                >{{$value->libelle}}</option>
                            @endforeach
                        </x-forms.select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <x-forms.input
                            label="{{__('menu.url link')}}"
                            name="url_link"
                            placeholder="{{__('menu.url link')}}"
                            value="{{$menu->link}}"
                        ></x-forms.input>
                    </div>
                    <div class="col">
                        <x-forms.input
                            label="{{__('menu.menu icon')}}"
                            name="menu_icon"
                            placeholder="{{__('menu.menu icon')}}"
                            value="{{$menu->icon}}"
                        ></x-forms.input>
                    </div>
                </div>
                <div class="form">
                    <x-inputs.input type="hidden" value="{{ $menu->id }}" name="id"></x-inputs.input>
                    <div class="col-md-12 text-right">
                        <x-buttons.btn-save
                            class="btn btn-success btn-icon-split"
                            onclick="saveform(this)"
                            container="tab1">
                            {{ __('text.enregistrer') }}
                        </x-buttons.btn-save>
                        <div id="form-errors" class="text-left"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-card>

