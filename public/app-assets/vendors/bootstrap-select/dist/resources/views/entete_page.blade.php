@extends('layout_pdf')


@section('page-content')

@php
    $lib_wilaya_ar =  ' ولاية ' . $commune->moughataa->wilaya->libelle_ar;
          $lib_wilaya =  "Wilaya de ".$commune->moughataa->wilaya->libelle;
          $lib_moughataa_ar =  ' مقاطعة ' .$commune->moughataa->libelle_ar;
          $lib_moughataa =  "Moughataa de ".$commune->moughataa->libelle;
          $lib_commune_ar = ' بلدية ' .$commune->libelle_ar;
          $lib_commune =  ' Commune de '.$commune->libelle;
@endphp

<table width="100%">
    <tr>
        <td colspan="3">
            <img  class="img" src="{{ asset("img/pdf_header.png") }}" alt="">
        </td>
    </tr>
    @if(App::isLocale('ar'))
        <tr>
            <td class="entete"></td>
            <td class="entete"></td>
            <td class="entete"></td>
            <td class="entete">
                <b><span>{{  $lib_wilaya_ar}} </span></b><br>
                <b><span>{{ $lib_wilaya}}</b></span>
            </td>
        </tr>
        <tr>

            <td class="entete"></td>
            <td class="entete"></td>
            <td class="entete"></td>
            <td class="entete">
                <b><span>{{$lib_moughataa_ar}}</b></span><br>
                <b><span>{{$lib_moughataa}}</b></span>
            </td>
        </tr>
        <tr>

            <td class="entete"></td>
            <td class="entete"></td>
            <td class="entete"></td>
            <td class="entete">
                <b> <span>{{ $lib_commune_ar}}</b></span><br>
                <b> <span>{{ $lib_commune }}</b></span>
            </td>
        </tr>
        @else
        <tr>
            <td class="entete">
                <b><span>{{  $lib_wilaya_ar}} </span></b><br>
                <b><span>{{ $lib_wilaya}}</b></span>
            </td>
            <td class="entete"></td>
            <td class="entete"></td>
            <td class="entete"></td>
        </tr>
        <tr>
            <td class="entete">
                <b><span>{{$lib_moughataa_ar}}</b></span><br>
                <b><span>{{$lib_moughataa}}</b></span>
            </td>
            <td class="entete"></td>
            <td class="entete"></td>
            <td class="entete"></td>
        </tr>
        <tr>
            <td class="entete">
                <b> <span>{{ $lib_commune_ar}}</b></span><br>
                <b> <span>{{ $lib_commune }}</b></span>
            </td>
            <td class="entete"></td>
            <td class="entete"></td>
            <td class="entete"></td>
        </tr>
    @endif
</table>
    {!! $titre !!}
@endsection
