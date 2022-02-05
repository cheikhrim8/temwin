@extends('layout')
@section('page-title')
    {{ trans('text.familles') }}
@endsection
@section('top-page-btn')
    <a href="#" class=" btn btn-sm btn-primary shadow-sm"
       onclick="openFormAddInModal('familles')"><i class="fas fa-plus fa-sm text-white-50"></i> {{trans("text.add_famille")}}</a>
@endsection
@section('page-content')
    <div class="row">
        <div class="col-lg-12">
            @if (session('successmsg') || session('errormsg'))
                <div class="alert alert-{{(session('successmsg'))?'success':'danger'}} alert-dismissible">
                    {{ session('successmsg') }}{{ session('errormsg') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
            @endif
            <div class="card shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="mytree" class="bstree">
                            <ul>
                                <li data-id="root" data-level="0">
                                <span>
                                   Racine
                                </span>
                                    <ul>
                                        <li data-id="ACL" data-level="1">
                                            <span class="pull-right" >testttt</span>
                                            <ul>
                                                <li data-id="ALS" data-level="2"><span>Alsace</span>
                                                    <ul>
                                                        <li data-id="ALS01" data-level="3"><span>Colmar</span></li>
                                                        <li data-id="ALS02" data-level="3"><span>Mulhouse</span></li>
                                                        <li data-id="ALS03" data-level="3"><span>Darmstadt</span></li>
                                                    </ul>
                                                </li>
                                                <li data-id="CHA" data-level="2"><span>Champagne-Ardenne</span>
                                                    <ul>
                                                        <li data-id="CHA01" data-level="3"><span>Bazeilles</span></li>
                                                        <li data-id="CHA02" data-level="3"><span>Châlons-en-Champagne</span></li>
                                                        <li data-id="CHA03" data-level="3"><span>Charleville-Mézières</span></li>
                                                        <li data-id="CHA04" data-level="3"><span>Reims</span></li>
                                                        <li data-id="CHA05" data-level="3"><span>Saint-Dizier</span></li>
                                                        <li data-id="CHA06" data-level="3"><span>Troyes</span></li>
                                                    </ul>
                                                </li>
                                                <li data-id="LOR" data-level="2"><span>Lorraine</span>
                                                    <ul>
                                                        <li data-id="LOR01" data-level="3"><span>Cosnes-et-Romain </span></li>
                                                        <li data-id="LOR02" data-level="3"><span>Épinal</span></li>
                                                        <li data-id="LOR03" data-level="3"><span>Forbach</span></li>
                                                        <li data-id="LOR04" data-level="3"><span>Lunéville</span></li>
                                                        <li data-id="LOR05" data-level="3"><span>Metz</span></li>
                                                        <li data-id="LOR06" data-level="3"><span>Nancy</span></li>
                                                        <li data-id="LOR07" data-level="3"><span>Pont-à-Mousson</span></li>
                                                        <li data-id="LOR08" data-level="3"><span>Saint-Dié-des-Vosges</span></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li data-id="ALP" data-level="1"><span>Aquitaine - Limousin - Poitou-Charente</span>
                                            <ul>
                                                <li data-id="AQU" data-level="2"><span>Aquitaine</span>
                                                    <ul>
                                                        <li data-id="AQU01" data-level="3"><span>Anglet</span></li>
                                                        <li data-id="AQU02" data-level="3"><span>Bordeaux</span></li>
                                                        <li data-id="AQU03" data-level="3"><span>Pau</span></li>
                                                    </ul>
                                                </li>
                                                <li data-id="LIM" data-level="2"><span>Limousin</span>
                                                    <ul>
                                                        <li data-id="LIM01" data-level="3"><span>Brive-la-Gaillarde</span></li>
                                                        <li data-id="LIM02" data-level="3"><span>Limoges</span></li>
                                                    </ul>
                                                </li>
                                                <li data-id="PCH" data-level="2"><span>Poitou-Charentes</span>
                                                    <ul>
                                                        <li data-id="PCH01" data-level="3"><span>Angoulême</span></li>
                                                        <li data-id="PCH02" data-level="3"><span>Chasseneuil-du-Poitou</span></li>
                                                        <li data-id="PCH03" data-level="3">La Rochelle</li>
                                                        <li data-id="PCH04" data-level="3">
                                                            <div class="form-row">
                                                                <div class="col-md-10" align="left"  >
                                                                    <span>testttt</span>
                                                                </div>
                                                                <div class="col-md-2 float-label-control" align="right" >
                                                                    <input type="email" class="form-control-sm" value="0">
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </li>
                                                        <li data-id="" data-level="3"><span>Chasseneuil-du-Poitou</span></li>

                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <h1>HTML demo</h1>
                        <div id="html" class="demo">
                            <ul>
                                <li data-jstree='{ "opened" : true }'>Root node
                                    <ul>
                                        <li data-jstree='{ "selected" : true }'>Child node 1</li>
                                        <li>Child node 2</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <script >
                            // html demo
                            $('#html').jstree();
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
