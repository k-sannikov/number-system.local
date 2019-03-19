<div class="input-group mb-3">
    <input type="text" class="form-control" name="binaryNumber" value="{{ $binaryNumber ?? old('binaryNumber', '') }}" placeholder="Двоичное число">
    <div class="input-group-append">
        <button type="submit" name="operation" value="convert" id="convert" class="btn btn-outline-secondary" >Преобразовать
        </button>
    </div>
</div>
