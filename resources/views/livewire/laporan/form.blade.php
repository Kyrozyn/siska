<div class="page-content-wrapper">
    <div class="container py-4">
        <div class="card">
            <div class="card-header">
                <h5>Laporan  Baru</h5>
                <h6>Topik Temuan : {{\App\Models\TopikTemuan::whereId($menutemuans->topik_temuan_id)->first()->nama_topik_temuan}}</h6>
                <h6>Menu Temuan : {{$menutemuans->nama_menu_temuan}}</h6>
            </div>
            <div class="card-body">
                @foreach($pertanyaan_temuans as $pertanyaan)
                    @if($pertanyaan->type == 'text')
                        <div class="form-group">
                            <label for="{{$pertanyaan->id}}">{{$pertanyaan->nama_pertanyaan_temuan}}</label>
                            <input type="text" class="form-control" id="{{$pertanyaan->id}}" name="{{$pertanyaan->id}}" placeholder="{{$pertanyaan->nama_pertanyaan_temuan}}" wire:model="jawaban.{{$pertanyaan->id}}">
                        </div>
                    @elseif($pertanyaan->type == 'number')
                        <div class="form-group">
                            <label for="{{$pertanyaan->id}}">{{$pertanyaan->nama_pertanyaan_temuan}}</label>
                            <input type="number" class="form-control" id="{{$pertanyaan->id}}" name="{{$pertanyaan->id}}" placeholder="{{$pertanyaan->nama_pertanyaan_temuan}}" wire:model="jawaban.{{$pertanyaan->id}}"> {{$pertanyaan->satuan}}
                        </div>
                    @elseif($pertanyaan->type == 'option1')
                        <div class="form-group">
                            <label for="{{$pertanyaan->id}}">{{$pertanyaan->nama_pertanyaan_temuan}}</label>
                            <select class="form-control" id="{{$pertanyaan->id}}" name="{{$pertanyaan->id}}" wire:model="jawaban.{{$pertanyaan->id}}">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                            </select>
                        </div>
                    @endif
                @endforeach
                <div class="card">
                    <div class="card-body">
                        <div class="file-upload-card">
                            <svg class="bi bi-file-earmark-arrow-up text-primary" width="20" height="20" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"></path>
                                <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"></path>
                                <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V7.707l1.146 1.147a.5.5 0 0 0 .708-.708l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 7.707V11.5a.5.5 0 0 0 .5.5z"></path>
                            </svg>
                            <h5 class="mt-2 mb-4">Upload file anda</h5>
                            <div
                                x-data="{ isUploading: false, progress: 0 }"
                                x-on:livewire-upload-start="isUploading = true"
                                x-on:livewire-upload-finish="isUploading = false"
                                x-on:livewire-upload-error="isUploading = false"
                                x-on:livewire-upload-progress="progress = $event.detail.progress"
                            >
                                <!-- File Input -->
                                <div class="form-file">
                                    <input class="form-control d-none" id="customFile" type="file" multiple accept="image/*, video/*" wire:model="file_upload">
                                    <label class="form-file-label justify-content-center" for="customFile"><span class="form-file-button btn btn-primary shadow w-100">Upload File</span></label>
                                </div>

                                <!-- Progress Bar -->
                                <div x-show="isUploading">
                                    <progress max="100" x-bind:value="progress"></progress>
                                </div>
                            </div>
{{--                            <h6 class="mt-4 mb-0">Supported files</h6><small>.jpg .png .jpeg .gif</small>--}}
                        </div>
                    </div>
                </div>
                    @if($file_upload)
                    <div class="card">
                        <div class="card-body">
                            <div class="file-upload-card">
                                <div class="row">
                                    @foreach ($file_upload as $key => $images)
                                        <div class="col-3 mb-1">
                                            <img src="{{asset('/img/fileicon.png')}}" style="width: 30px" wire:click="deleteFile({{$key}})">
                                            <p>{{$images->getClientOriginalName()}}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="form-group">
                        <button wire:click="submit()" class="btn btn-primary shadow w-100">Buat Laporan</button>
                    </div>
            </div>
        </div>
    </div>
</div>
