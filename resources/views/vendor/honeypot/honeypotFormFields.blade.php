@if($enabled)
    <div id="{{ $nameFieldName }}_wrap" style="display:none;">
        <input name="{{ $nameFieldName }}" type="text" value="" id="{{ $nameFieldName }}">
        <input id="valid_from" name="{{ $validFromFieldName }}" type="text" value="{{ $encryptedValidFrom }}">
    </div>
@endif
