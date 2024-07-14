
      <div class="page-header mt-5">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Profile Information</h3>
                        </div>
                    </div>
                </div>
 
 <div class="row">
    
    
                    <div class="col-xl-6 d-flex">
                        
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h4 class="card-title">Update your account's profile information and email address.</h4>
                            </div>
                            <div class="card-body">
                                 <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                                    @csrf
                                </form>
                                <form method="post" action="{{ route('profile.update') }}">
                                     @csrf
                                    @method('patch')
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Name</label>
                                        <div class="col-lg-9">
                                            <input id="name" name="name" type="text" class="form-control" :value="old('name', $user->name)" required  autocomplete="name" >
                                        </div>
                                    </div>
                                
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Email Address</label>
                                        <div class="col-lg-9">
                                            <input id="email" name="email" type="email" class="form-control" :value="old('email', $user->email)" required autocomplete="username">
                                              @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                                <div>
                                                    <p class="text-sm mt-2 text-gray-800">
                                                        {{ __('Your email address is unverified.') }}

                                                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                            {{ __('Click here to re-send the verification email.') }}
                                                        </button>
                                                    </p>

                                                    @if (session('status') === 'verification-link-sent')
                                                        <p class="mt-2 font-medium text-sm text-green-600">
                                                            {{ __('A new verification link has been sent to your email address.') }}
                                                        </p>
                                                    @endif
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                   
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                             @if (session('status') === 'profile-updated')
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


