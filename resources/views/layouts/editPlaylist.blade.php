
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit your playlist </h5>
      </div>
      <div class="modal-body">
        <form action="{{ url('editPlaylist') }}" method='post'>
        @csrf
          <div class="form-group">
            <label for="playlist-name" class="col-form-label">Playlist name:</label>
            <input type="text" class="form-control" id="playlist-name" name="playlistName">
            <input type="hidden" id="playlist-id" name="playlistId" value="{{ $userPlaylist->id }}">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Edit Playlist</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>