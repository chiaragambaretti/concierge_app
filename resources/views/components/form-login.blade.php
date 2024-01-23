<form class="form-login" method="POST" action="{{route('login')}}">
  @csrf
    <div class="mb-3">
      <label for="room_number" class="form-label"></label>
      <input type="text" name="room_number" required class="form-control rounded-0" id="room_number" placeholder="Room Number">
    <div class="mb-3">
      <label for="password" class="form-label"></label>
      <input type="password" name="password" required class="form-control rounded-0" id="password" placeholder="Password">
    </div>
    
    </div>
    <div class="d-flex justify-content-center mt-3">
        <button type="submit" class="btn mt-5 w-75 rounded-0 login-button">LOGIN</button>
    </div>
  </form>
