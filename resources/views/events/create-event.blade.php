<form action="{{asset('create-event')}}" method="post">
  <input type="hidden" value="{{csrf_token()}}" name="_token">
  <input type="text" name="name">
  <input type="text" name="slug">
  <input type="submit">
</form>
