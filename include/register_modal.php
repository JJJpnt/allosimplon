<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registerModal"></button> -->

<!-- Connect Modal -->
<div class="modal fade bg-mid-trans" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content bg-dark-trans">
      <div class="modal-header">
        <h5 class="modal-title color-danger" id="registerModalLabel">Inscription</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fas fa-window-close"></i></span>
        </button>
      </div>
      <div class="modal-body">
				<form id="register_form" action="include/user_register.php" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope fa-fw"></i></span>
						</div>
						<input name="user_mail" id="user_mail" type="text" class="form-control" placeholder="E-Mail">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user fa-fw"></i></span>
						</div>
						<input name="user_pseudo" id="user_pseudo" type="text" class="form-control" placeholder="Nom d'utilisateur">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key fa-fw"></i></span>
						</div>
						<input name="user_password" id="user_password" type="password" class="form-control" placeholder="Mot de passe">
					</div>
					<div class="form-group">
            <!-- <input type="submit" value="Login" class="btn btn-login bg-dark-trans float-right"> -->
            <a class="btn btn-login bg-dark-trans float-right" href="javascript:{}" onclick="document.getElementById('register_form').submit();">Inscription</a>
					</div>
				</form>
			</div>

      <div class="modal-footer d-flex justify-content-between">
				<div class="d-flex justify-content-center links">
					Error message
				</div>
				<!-- <div class="d-flex justify-content-center links">
					<a href="#">Mot de passe oublié ?</a>
				</div> -->
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>