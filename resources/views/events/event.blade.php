@extends('layouts.eventMaster')

@section('content')
    <header>
        <div class="container">
          <div class="headerContent">
            <div class="bannerText">
                  <h2 class="bannerSubTitle">Be part of</h2>
                  <h1 class="confName">{{$event->name}}</h1>

                  <div class="bannerDesc justifyFlex justify-center">
                    <div class="smallDesc">17 -22 AUGUST</div>
                    <div class="smallDesc">LONDON </div>
                    <div class="smallDesc">2017 EDITION</div>
                  </div>

                  <div class="btn ">Get tickets</div>
            </div>
          </div>
        </div>
        <div class="headerOverlay"></div>
    </header>
    <div class="countdown">
        <div class="container">
          <div class="count-down justifyFlex">
               <div class="days counter-box">

                   <div >
                     <span>18</span>
                     дни</div>
               </div>
               <div class="hours counter-box"><div ><span>20</span> часа</div></div>
               <div class="minutes counter-box">

                 <div >
                   <span>45</span>
                   минути</div>
               </div>
               <div class="seconds counter-box">

                 <div ><span>15</span> секунди</div>
               </div>
           </div>
        </div>
    </div>
    <div class="container">

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut convallis tellus vel malesuada gravida. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed posuere lectus lectus, ornare pulvinar sem vestibulum non. Phasellus neque leo, placerat ac ipsum ut, varius sagittis quam. Etiam in ligula auctor, lobortis eros ac, cursus quam. Nulla dictum ullamcorper eros et gravida. Vivamus eget tristique ipsum. Integer sed enim sed lorem ultricies elementum. Mauris nec lectus nunc. Sed vitae tempus lorem. Nam nec ornare velit, at vestibulum magna. Proin ut tortor vitae augue tincidunt hendrerit.

Nulla id neque lacus. In feugiat nec odio a gravida. Phasellus non dolor tincidunt, imperdiet felis eu, viverra lectus. Donec pretium vehicula nisl, vitae pulvinar neque rhoncus eget. Nullam mi nibh, elementum et commodo ac, blandit in nisi. Praesent magna nibh, convallis quis ullamcorper id, hendrerit non dui. Suspendisse vel porttitor ex. Sed commodo maximus ex ac convallis. Nulla fringilla viverra dignissim. Nunc commodo erat purus. Suspendisse fermentum velit ut nulla fringilla, vestibulum tincidunt orci sollicitudin. Vestibulum venenatis suscipit sollicitudin.

Quisque id aliquet dui. Cras condimentum, diam non vehicula porta, libero dolor luctus ipsum, vel efficitur sapien ipsum vitae turpis. Integer fringilla urna dui. Mauris vulputate nec lectus sit amet aliquam. Duis ac auctor dolor. Morbi condimentum metus sit amet mi lobortis consectetur. Pellentesque ac dictum odio. Fusce lacinia quam et eros tincidunt porttitor. Aliquam feugiat ullamcorper tincidunt. Cras pharetra neque ullamcorper, pretium metus at, dapibus magna. Donec aliquet orci et dictum rhoncus. Integer nisi sem, egestas at mollis id, venenatis id orci.

Donec bibendum, massa sit amet cursus aliquam, tellus odio imperdiet ligula, sit amet gravida felis elit molestie enim. Maecenas tincidunt ante quis erat sollicitudin feugiat. Cras non interdum dui. Pellentesque eget posuere quam. Nunc a lacus sed nibh egestas molestie sed cursus enim. Sed id varius magna, nec molestie massa. Nam risus turpis, scelerisque a accumsan nec, efficitur at sem.

Maecenas sed dolor est. Donec nec purus non leo efficitur elementum ultricies in nunc. Aenean quis scelerisque nibh. Maecenas id orci at enim venenatis ultrices. Mauris pretium tortor eu ante ultrices ullamcorper. In eleifend, ligula sed ullamcorper facilisis, velit arcu porta mauris, non facilisis nisl nibh at lorem. Sed suscipit ante ac malesuada consequat. Vestibulum sodales orci libero, non fringilla mauris vulputate vel. Duis suscipit auctor felis dictum commodo. Maecenas placerat dapibus nisi, sit amet vehicula libero elementum ut. In hac habitasse platea dictumst. Ut maximus, arcu at gravida molestie, urna magna scelerisque mi, in gravida libero neque blandit sem. Nulla sed orci a lectus aliquet suscipit faucibus in ligula.
</p>
    </div>
@endsection
