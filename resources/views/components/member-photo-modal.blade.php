<div class="custom-modal-in-show-page row" id="changeModalPhotoBox">
    <div class="modal-box col-sm-8 col-xl-4">
    <form action="{{ route('members.profile-photo-update', $data->id) }}" enctype="multipart/form-data" method="POST">
    @csrf @method('PUT')
    @if ($data->photo)
    <div>
        <div class="modal-change-photo-title">
            <div>
                <h3 class="d-inline">Change Foto Profil</h3> 
            </div>
            <div>
                <span class="ft-x text-danger" id="ftXCancelModal"></span>
            </div>
        </div>
        <div data-provides="fileinput" class="fileinput form-control custom-upload-photo-box fileinput-exists">
        <div data-trigger="fileinput" class="fileinput-preview img-thumbnail">
            <img src="{{ Storage::url($data->photo) }}">
        </div> 
        <div>
            <span class="btn btn-outline-secondary btn-file">
            <span class="fileinput-new">Select image</span> 
            <span class="fileinput-exists">Change</span> 
            <input type="hidden" value="" name="">
            <input type="file" name="photo">
            </span> 
            <button type="submit" class="btn btn-md btn-info float-right"><i class="ft-check"></i> <span class="d-none d-md-inline">Submit</span></button>
            <span id="cancelModalPhoto" class="btn btn-md btn-danger float-right mr-1"><i class="ft-x"></i> <span class="d-none d-md-inline">Cancel</span></span>
        </div>
        </div>
    </div>
    @else
    <div>
        <h3>Upload Foto Profil</h3> 
        <div data-provides="fileinput" class="fileinput form-control custom-upload-photo-box fileinput-exists">
        <div data-trigger="fileinput" class="fileinput-preview img-thumbnail" style="width: 500px; height: 350px; line-height: 150px;">
            <img src="{{ $data->getUrlfriendlyAvatar() }}" style="width: 100%">
        </div> 
        <div>
            <span class="btn btn-outline-secondary btn-file">
            <span class="fileinput-new">Select image</span> 
            <span class="fileinput-exists">Change</span> 
            <input type="hidden" value="" name="">
            <input type="file" name="photo">
            </span> 
            <button type="submit" class="btn btn-md btn-info float-right"><i class="ft-check"></i> <span class="d-none d-md-inline">Submit</span></button>
            <span id="cancelModalPhoto" class="btn btn-md btn-danger float-right mr-1"><i class="ft-x"></i> <span class="d-none d-md-inline">Cancel</span></span>
        </div>
        </div>
    </div>
    @endif
    </form>
</div>
</div>