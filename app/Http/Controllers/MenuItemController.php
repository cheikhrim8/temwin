<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MenuItem;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class MenuItemController extends Controller
{
    public function index()
    {
        return view('menu.index');
    }

    public function store(Request $request): RedirectResponse
    {
        MenuItem::create([
            "libelle" => $request->input('libelle'),
            "libelle_ar" => $request->input('libelle_ar'),
            "parent_id" => $request->input('parent_id'),
            "link" => $request->input('url_link'),
            "icon" => $request->input('menu_icon'),
        ]);

        return redirect()->back();
    }

    public function getDT($parent, $selected = 'all')
    {

        $menus = MenuItem::with('parent');
        if ($selected != 'all')
            $menus = $menus->with('parent')
                ->orderByRaw('id = ? desc', [$selected]);

        return DataTables::of($menus)
            ->addColumn('actions', function (MenuItem $menuItem) {
                $actions = collect();
                $actions->push([
                    'icon' => 'show',
                    'href' => "#!",
                    'onClick' => "openObjectModal(" . $menuItem->id . ",'menus',
                    '#datatableshow','main', 1,'lg')",
                    'class' => '', 'title' => trans('text.visualiser')
                ]);
                $actions->push([
                    'icon' => 'delete',
                    'href' => "#!",
                    'onClick' => "deleteObject('" . url("menus/delete/" . $menuItem->id) . "',
                    '" . __('text.confirm_suppression') . ' "element du menu :"' . $menuItem->libelle . "')",
                    'class' => '', 'title' => __('text.supprimer')
                ]);

                return view('actions-btn', ["actions" => $actions])->render();
            })
            ->setRowClass(function ($menuIem) use ($selected) {
                return $menuIem->id == $selected ? 'alert-success' : '';
            })
            ->rawColumns(['id', 'actions'])
            ->make(true);
    }

    public function formAdd()
    {
        return view('menu' . '.add', [
            'menus' => MenuItem::all()
        ]);
    }

    public function add(Request $request): JsonResponse
    {
        $menuItem = MenuItem::create([
            "libelle" => $request->input('libelle'),
            "libelle_ar" => $request->input('libelle_ar'),
            "parent_id" => $request->input('parent_id'),
            "link" => $request->input('url_link'),
            "icon" => $request->input('menu_icon'),
        ]);

        return response()
            ->json($menuItem->id, 200);
//        }
    }

    public function edit(Request $request): JsonResponse
    {
        $menu_item = MenuItem::find($request->id);
        $menu_item->libelle = $request->input("libelle");
        $menu_item->libelle_ar = $request->input("libelle_ar");
        $menu_item->parent_id = $request->input("parent_id");
        $menu_item->link = $request->input('url_link');
        $menu_item->icon = $request->input('menu_icon');
        $menu_item->save();
        return response()
            ->json('Done', 200);

    }

    public function get($id)
    {
        $lib = trans('text.lib');

        $menuItem = MenuItem::find($id);
        $tablink = 'menus/getTab/' . $id;
        $tabs = [
            '<i class="fa fa-info-circle"></i> ' . trans('text.info') => $tablink . '/1',
        ];

        $modal_title = '<span>' . __('menu.menu item') .
            '</span><strong>: ' . $menuItem->libelle . '</strong>';

        return view('tabs', [
            'tabs' => $tabs,
            'modal_title' => $modal_title,
            'numbre' => null
        ]);
    }

    public function getTab($id, $tab)
    {
        $menuItem = MenuItem::find($id);

        switch ($tab) {
            default :
                $parametres = ['menu' => $menuItem,
                    'menus' => MenuItem::all()
                ];
                break;
        }
        return view('menu.tabs.tab' . $tab, $parametres);
    }

    public function delete($id)
    {
        $menuItem = MenuItem::destroy($id);

        if ($menuItem) {
            return response()->json([
                'success' => 'true', 'msg' => trans('text.element_well_deleted'),
            ], 200);
        } else {
            return response()->json([
                'success' => 'true', 'msg' => 'Ne peut pas etre supprime'
            ], 200);
        }


    }

}
