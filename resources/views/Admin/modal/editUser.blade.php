

  <!-- Modal -->
  <div class="modal fade" id="modalEditProfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content rounded-0">
        <div class="modal-body p-4 px-5">

          
          <div class="main-content text-center">
              
              <a href="#" class="close-btn" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><span class="fa fa-close"></span></span>
                </a>

              <div class="warp-icon mb-4">
                <span class="fa fa-user-circle fa-5x"></span>
              </div>
              <form action="{{ route('user.update') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{auth()->user()->id}}">
                <div class="form-group mb-4">
                  <input type="text" class="form-control text-center" placeholder="utilisateur" name="nom" value="{{auth()->user()->name}}">
                </div>
                <div class="form-group mb-4">
                    <input type="email" class="form-control text-center" name="email" placeholder="email" value="{{auth()->user()->email}}">
                </div>

                <div class="d-flex">
                  <div class="mx-auto">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-database"></i>&nbsp;valider</button>
                  </div>
                </div>
              </form>
            
          </div>

        </div>
      </div>
    </div>
  </div>