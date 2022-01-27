
<div class="col-lg-3">
    <aside class="sidebar static">
        <div class="widget">
            <h4 class="widget-title">Shortcuts</h4>
            <ul class="naves">
                <li>
                    <i class="ti-image"></i>
                    <a href='{{url('/post')}}' title="">Profile</a>
                </li>
                <li>
                    <i class="ti-share"></i>
                    <a href="{{url('/User/'.auth()->user()->id.'/edit')}}" title=""> Edit Profile</a>
                </li>
                <li>
                    <i class="ti-share"></i>
                    <a href="{{url('/editpassword/'.auth()->user()->id)}}" title=""> Edit password</a>
                </li>
                <li>
                    <i class="ti-power-off"></i>
                    <a href='{{url('/logout')}}' title="">Logout</a>
                </li>
            </ul>
        </div><!-- Shortcuts -->
        