
<?php
$lib=trans("text.libelle_base");
?>

<label> * {{ trans("text.$libelle") }} </label>
<select  id="ms" multiple data-mdb-filter="true" name="communes[]" required>
    @foreach($liste as $commune)
        <option value="{{ $commune['id'] }}" >{{ $commune[$lib]}}</option>
    @endforeach
</select>
</div>



<script>
    $(function () {
        $('#ms').multiselect({
            enableFiltering: true,
            includeSelectAllOption: true,
            enableCaseInsensitiveFiltering: true,
            onChange: function(element, checked) {
                var brands = $('#ms option:selected');
                var selected = [];
                $(brands).each(function(index, brand){
                    selected.push([$(this).val()]);
                });
            }

        });
        $('#ms').on('change',function(){
            $('.multiselect').css('border-color','#ccc');
            $( '#form-errors' ).hide();
        });
        $('#date_ref').on('change',function(){
            $('#date_ref').css('border-color','#ccc');
            $( '#form-errors' ).hide();
        });
        $('#categorie_donnee').on('change',function(){
            $('#grp_donnee').css('border-color','#ccc');
            $( '#form-errors' ).hide();
        });
    });


</script>
