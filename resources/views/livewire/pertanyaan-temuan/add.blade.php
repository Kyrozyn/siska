<div>
    <div class="form-group">
        <label for="nama_topik_temuan">Nama Pertanyaan Temuan</label>
        <input type="text" class="form-control" placeholder="Nama Pertanyaan Temuan" wire:model="nama_pertanyaan_temuan">
    </div>
    <div class="form-group">
        <label for="nama_topik_temuan">Satuan</label>
        <input type="text" class="form-control" placeholder="Satuan" wire:model="satuan">
    </div>
    <div class="form-group">
        <label class="form-label" for="defaultSelect">Tipe Pertanyaan</label>
        <select class="form-select form-control" id="defaultSelect" name="defaultSelect" aria-label="Default select example" wire:model="type">
            <option value="text" selected="">Teks</option>
            <option value="number">Angka</option>
            <option value="option1">1-5</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary" wire:click="insert">Tambah</button>
</div>
