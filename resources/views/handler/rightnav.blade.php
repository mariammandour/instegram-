<div class="col-lg-3">
    <aside class="sidebar static">
        <div class="widget">
            <h4 class="widget-title">Shortcuts</h4>
            <ul class="naves">

                <li>
                    <i class="ti-image"></i>
                    <a href='{{url('/profile')}}' title="">Profile</a>
                </li>
                <!-- <li>
                    <i class="ti-user"></i>
                    <a ref='{{url('/friends')}}' title="">friends</a>
                </li> -->
                <li>
                    <i class="ti-share"></i>
                    <a href='{{url('/editprofile')}}' title=""> Edit Profile</a>
                </li>
                <li>
                    <i class="ti-share"></i>
                    <a href='{{url('/editpassword')}}' title=""> Edit password</a>
                </li>
                <li>
                    <i class="ti-power-off"></i>
                    <a href='{{url('/login')}}' title="">Login</a>
                </li>
                <li>
                    <i class="ti-power-off"></i>
                    <a href='{{url('/logout')}}' title="">Logout</a>
                </li>
            </ul>
        </div><!-- Shortcuts -->
        <div class="widget stick-widget">
            <h4 class="widget-title">Who's follownig</h4>
            <ul class="followers">
                <li>
                    <figure><img src="images/resources/friend-avatar2.jpg" alt="">
                    </figure>
                    <div class="friend-meta">
                        <h4><a href="time-line.html" title="">Kelly Bill</a></h4>
                        <a href="#" title="" class="underline">Add Friend</a>
                    </div>
                </li>

            </ul>
        </div><!-- who's following -->
    </aside>
</div><!-- sidebar -->