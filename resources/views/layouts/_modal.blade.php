
@foreach (['main','second','third','forth','add','de_tab','de'] as $type_modal)
    <div id="{{$type_modal}}-modal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header-body">
                </div>
            </div>
        </div>
    </div>
@endforeach
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@lang('text_ah.confirm_logout')</h5>
                <button class="close @if(App::isLocale('ar')) d-none @endif" type="button" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">@lang('text_ah.click_to_logout')</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">@lang('text_ah.retourner')</button>
                <a class="btn btn-primary" href="{{ url('logout') }}">
                    <i class="fa fa-sign-out fa-fw"></i> @lang('text_ah.deconnecter')
                </a>
            </div>
        </div>
    </div>
</div>
