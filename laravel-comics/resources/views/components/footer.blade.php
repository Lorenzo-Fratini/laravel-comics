<footer>
   <div class="footer-top">
       <div class="list-cont">
           @foreach ($footer as $f)
           <div class="list-item">
               <h2>{{ $f['title'] }}</h2>
               <ul>
                   @foreach ($f['list'] as $l)
                       <li>
                           <a href="#">
                               {{ $l }}
                           </a>
                       </li>
                   @endforeach
               </ul>
            </div>
           @endforeach
       </div>
       <div class="copy">
           All Site Content TM and &copy 2020 DC Entertainment, unless otherwise <a href="#">noted here.</a>
           All rights reserved. <br>
           <a href="#">Cookies Settings</a>
       </div>
       <div class="logo-cont"></div>
   </div>
   <div class="footer-bottom">
       <a class="button" href="#">sign-up now!</a>
       <div class="social">
           <span>follow us</span>
           <ul>
               @foreach ($icons as $i)
                   <li>
                       <a href="#">
                            <img src="{{ asset('/storage/assets/'.$i) }}">
                       </a>
                    </li>
               @endforeach
           </ul>
       </div>
   </div>
</footer>