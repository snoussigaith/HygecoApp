
      <div class="page-header mt-5">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Update Password</h3>
                        </div>
                    </div>
                </div>
 
                <div class="row">
    
    
                    <div class="col-xl-6 d-flex">
                        
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h4 class="card-title">Ensure your account is using a long, random password to stay secure.</h4>
                            </div>
                            <div class="card-body">
                                
                                <form method="post" action="{{ route('password.update') }}">
                                     @csrf
                                    @method('put')
                                    <div class="form-group row">
                                        <label for="update_password_current_password" :value="__('Current Password')" class="col-lg-3 col-form-label">Current Password</label>
                                        <div class="col-lg-9">
                                            <input id="update_password_current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" >
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="update_password_password" :value="__('New Password')" class="col-lg-3 col-form-label">New Password</label>
                                        <div class="col-lg-9">
                                            <input id="update_password_password" name="password" type="password"  autocomplete="new-password" class="form-control"  >
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="update_password_password_confirmation" :value="__('Confirm Password')" class="col-lg-3 col-form-label">Confirm Password</label>
                                        <div class="col-lg-9">
                                            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" >
                                        </div>
                                    </div>
                                
                                   
                                   
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                             @if (session('status') === 'password-updated')
                                                <p style="margin-top: 5px;" class="alert-success "
                                                    x-data="{ show: true }"
                                                    x-show="show"
                                                    x-transition
                                                    x-init="setTimeout(() => show = false, 2000)"
                                                    
                                                >{{ __('Saved.') }}</p>
                                            @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>







