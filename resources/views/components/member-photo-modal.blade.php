<div class="custom-modal-in-show-page">
<div class="modal-box">
    <form action="{{ route('members.profile-photo-update', $data->id) }}" enctype="multipart/form-data" method="POST">
    @csrf @method('PUT')
    @if ($data->photo)
    <div>
        <h3>Change Foto Profil</h3> 
        <div data-provides="fileinput" class="fileinput form-control custom-upload-photo-box fileinput-exists">
        <div data-trigger="fileinput" class="fileinput-preview img-thumbnail" style="width: 500px; height: 350px; line-height: 150px;">
            <img src="{{ Storage::url($data->photo) }}">
        </div> 
        <div>
            <span class="btn btn-outline-secondary btn-file">
            <span class="fileinput-new">Select image</span> 
            <span class="fileinput-exists">Change</span> 
            <input type="hidden" value="" name="">
            <input type="file" name="photo">
            </span> 
            <a href="#" data-dismiss="fileinput" class="btn btn-outline-secondary fileinput-exists">Remove</a>
            <button type="submit" class="btn btn-md btn-info float-right">Submit</button>
            <span onclick="(function(){ document.getElementsByClassName('custom-modal-in-show-page').style.opacity = '0'; return false; })();return false;" class="btn btn-md btn-info float-right">Submit</span>
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
            <a href="#" data-dismiss="fileinput" class="btn btn-outline-secondary fileinput-exists">Remove</a>
            <button onclick="" type="submit" class="btn btn-md btn-info float-right">Submit</button>
            <span onclick="(function(){ document.getElementsByClassName('custom-modal-in-show-page').style.display = 'none'; return false; })();return false;" class="btn btn-md btn-info float-right">Submit</span>
        </div>
        </div>
    </div>
    @endif
    </form>
</div>
</div>