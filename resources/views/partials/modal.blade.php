<div class="modal fade" id="login" tabindex="-1" role="dialog" ref="login2">
    <div class="modal-dialog modal-dialog-centered" role="document" aria-labelledby="loginTitle" aria-hidden="true">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginTitle">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="container">
                    <form action="{{route('sigin')}}" method="POST" id="submit2">
                       {{ csrf_field() }}
                            <a href="new-post.html"><span class="bg-facebook btn btn-primary py-2 px-5 col-md-12"><i class="fab fa-facebook-square fb-icon"></i> Login with Facebook</a><br>
                            <div class="hr-divider"><span class="hr-divider-text">OR</span></div>
                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            <div class="row form-group">
                                    <div class="col-md-12">
                                     <label class="font-weight-bold" for="fullname">Email</label>
                                      <input type="text" id="email" name="email" class="form-control" required placeholder="Email address or phone">
                                      
                                    </div>
                            </div>

                            <div class="row form-group">
                                    <div class="col-md-12">
                                     <label class="font-weight-bold" for="fullname">Password</label>
                                      <input type="password" id="password" name="password" class="form-control" required placeholder="*****">
                                      
                                    </div>
                            </div>



                    

                </div>

            </div>

            <div class="modal-footer">
                <input type="button" class="btn btn-secondary" data-dismiss="modal" value="Close">
                <input type="submit" class="btn btn-primary" value="Login">

            </div>

        </form>

        </div>

    </div>

</div>
