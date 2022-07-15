<div>
        <div class="form-group">
            <label for="nama_topik_temuan">Nama Menu Temuan</label>
            <input type="text" class="form-control" placeholder="Nama Menu Temuan" wire:model="nama_menu_temuan">
        </div>
        <div class="form-group">
            <label for="submenu">Apakah ada Submenu?</label>
            <label>
                <input type="checkbox" name="submenu" wire:model="punya_submenu">
            </label>
        </div>
        <button type="submit" class="btn btn-primary" wire:click="insert">Tambah</button>
</div>
