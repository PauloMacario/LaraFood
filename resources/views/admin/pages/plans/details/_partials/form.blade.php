@include('admin.includes.alerts')
<div class="form-group">
    <label for="name">Nome:</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ $detail->name ?? old('name') }}">
</div>