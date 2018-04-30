
<div class="customizer">
  <button type="button" name="button" class="btn btn-default"><span class="fa fa-times"></span></button>
  <button type="button" name="button" class="btn btn-primary" onclick="customizer.save()">Save</button>
  <h1>Customizer</h1>
  <button class="accordion">Header Section</button>
  <div class="panel">
    <form id="header-data">
        <div class="form-group">
            <label for="">Title 1</label>
            <input type="text" name="title1" value="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Title 2</label>
            <input type="text" name="title2" value="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Date From</label>
            <input type="date" name="date-from" value="" class="form-control">
            <label for="">Date To</label>
            <input type="date" name="date-to" value="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">City</label>
            <input type="text" name="city" value="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Edition</label>
            <input type="text" name="edition" value="" class="form-control">
        </div>
    </form>
  </div>

  <button class="accordion">Section 2</button>
  <div class="panel">
    <form id="about-data">
        <div class="form-group">
            <label for="">Title 1</label>
            <input type="text" name="aboutTitle" value="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Title 2</label>
            <input type="text" name="aboutTitle2" value="" class="form-control">
        </div>

    </form>
  </div>

  <button class="accordion">Section 3</button>
  <div class="panel">
    <p>Lorem ipsum...</p>
  </div>
</div>
