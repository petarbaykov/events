
<div class="customizer">
  <button type="button" name="button" class="btn btn-default"><span class="fa fa-times"></span></button>
  <button type="button" name="button" class="btn btn-primary" onclick="customizer.save()">Save</button>

  <button class="accordion">Header Section</button>
  <div class="panel">
    <form id="header-data">
        <div class="form-group">
            <label for="">Title 1</label>
            <input type="text" name="title1" value="{{$header_data->title1}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Title 2</label>
            <input type="text" name="title2" value="{{$header_data->title2}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Date From</label>
            <input type="date" name="date_from" value="{{$header_data->date_from}}" class="form-control">
            <label for="">Date To</label>
            <input type="date" name="date_to" value="{{$header_data->date_to}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">City</label>
            <input type="text" name="city" value="{{$header_data->city}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Edition</label>
            <input type="text" name="edition" value="{{$header_data->edition}}" class="form-control">
        </div>
    </form>
  </div>

  <button class="accordion">About Section</button>
  <div class="panel">
    <form id="about-data">
        <div class="form-group">
            <label for="">About Title</label>
            <input type="text" name="aboutTitle" value="{{$about_data->aboutTitle}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">About Description</label>
            <input type="text" name="aboutTitle2" value="{{$about_data->aboutTitle2}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Where Text</label>
            <input type="text" name="whereText" value="{{$about_data->whereText}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">When Text</label>
            <input type="text" name="whenText" value="{{$about_data->whenText}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Box 1 Number</label>
            <input type="text" name="box1Num" value="{{$about_data->box1Num}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Box 1 Text</label>
            <input type="text" name="box1Text" value="{{$about_data->box1Text}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Box 1 Icon</label>
            <input type="text" name="box1Icon" value="{{$about_data->box1Icon}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Box 2 Number</label>
            <input type="text" name="box2Num" value="{{$about_data->box2Num}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Box 2 Text</label>
            <input type="text" name="box2Text" value="{{$about_data->box2Text}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Box 2 Icon</label>
            <input type="text" name="box2Icon" value="{{$about_data->box2Icon}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Box 3 Number</label>
            <input type="text" name="box3Num" value="{{$about_data->box3Num}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Box 3 Text</label>
            <input type="text" name="box3Text" value="{{$about_data->box3Text}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Box 3 Icon</label>
            <input type="text" name="box3Icon" value="{{$about_data->box3Icon}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Box 4 Number</label>
            <input type="text" name="box4Num" value="{{$about_data->box4Num}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Box 4 Text</label>
            <input type="text" name="box4Text" value="{{$about_data->box4Text}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Box 4 Icon</label>
            <input type="text" name="box4Icon" value="{{$about_data->box4Icon}}" class="form-control">
        </div>
    </form>
  </div>

  <button class="accordion">Speakers Section</button>
  <div class="panel" id="speakers">
    <form id="speakers-data">
        <div class="form-group">
            <button type="button" class="btn btn-success" onclick="customizer.addSpeaker(this)"><span class="fa fa-plus"></span> Add speaker</button>
        </div>
          @if($speakers_data)
            <?php $count_speakers = 1;?>
              @foreach($speakers_data as $speaker)
              <div class="form-group">
                  <label for="">Speaker {{$count_speakers}}</label>
                  <input type="text" name="speaker{{$count_speakers}}Name" value="{{$speaker->name}}" class="form-control" placeholder="Enter name">
                    <input type="text" name="speaker{{$count_speakers}}Job" value="{{$speaker->job}}" class="form-control" placeholder="Enter job">
              </div>
              <script>
                speaksersJson["speaker"+<?php echo $count_speakers; ?>] = {
                    name:"",
                    job:""
                };
              </script>
              <?php  $count_speakers++; ?>
              @endforeach
          @endif
  </form>
  </div>

  <button class="accordion">Banner Section</button>
  <div class="panel" >
      <form id="banner-data">
        <div class="form-group">
            <label for="">Icon 1</label>
            <input type="text" name="icon1" value="{{$banner_data->icon1}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Text 1</label>
            <input type="text" name="text1" value="{{$banner_data->text1}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Sub Text 1</label>
            <input type="text" name="subText1" value="{{$banner_data->subText1}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Icon 2</label>
            <input type="text" name="icon2" value="{{$banner_data->icon2}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Text 2</label>
            <input type="text" name="text2" value="{{$banner_data->text2}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Sub Text 2</label>
            <input type="text" name="subText2" value="{{$banner_data->subText2}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Icon 3</label>
            <input type="text" name="icon3" value="{{$banner_data->icon3}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Text 1=3</label>
            <input type="text" name="text3" value="{{$banner_data->text3}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Sub Text 3</label>
            <input type="text" name="subText3" value="{{$banner_data->subText3}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Icon 4</label>
            <input type="text" name="icon4" value="{{$banner_data->icon4}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Text 4</label>
            <input type="text" name="text4" value="{{$banner_data->text4}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Sub Text 4</label>
            <input type="text" name="subText4" value="{{$banner_data->subText4}}" class="form-control">
        </div>
      </form>

  </div>
</div>
