<!DOCTYPE html>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Fashion Designers || Web Platform</title>
    <meta content="E-Tailoring Platform" name="description" />
    <meta content="" name="author" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

<head>

    <style>

body {
  align-items: center;
  background-color: #000;
  display: flex;
  justify-content: center;
  height: 150vh;
}

.form {
  background-color: #15172b;
  border-radius: 20px;
  box-sizing: border-box;
  height: 950px;
  padding: 20px;
  /* width: 500px; */
}

.title {
  color: #eee;
  font-family: sans-serif;
  font-size: 36px;
  font-weight: 600;
  margin-top: 30px;
}

.subtitle {
  color: #eee;
  font-family: sans-serif;
  font-size: 16px;
  font-weight: 600;
  margin-top: 10px;
}

.input-container {
  height: 50px;
  position: relative;
  width: 100%;
}

.ic1 {
  margin-top: 40px;
}

.ic2 {
  margin-top: 30px;
}

.input {
  background-color: #303245;
  border-radius: 12px;
  border: 0;
  box-sizing: border-box;
  color: #eee;
  font-size: 18px;
  height: 100%;
  outline: 0;
  padding: 4px 20px 0;
  width: 100%;
}

.cut {
  background-color: #15172b;
  border-radius: 10px;
  height: 20px;
  left: 20px;
  position: absolute;
  top: -20px;
  transform: translateY(0);
  transition: transform 200ms;
  width: 76px;
}

.cut-short {
  width: 50px;
}

.input:focus ~ .cut,
.input:not(:placeholder-shown) ~ .cut {
  transform: translateY(8px);
}

.placeholder {
  color: #b2b2c3;
  font-family: sans-serif;
  left: 20px;
  line-height: 14px;
  pointer-events: none;
  position: absolute;
  transform-origin: 0 50%;
  transition: transform 200ms, color 200ms;
  top: 20px;
}

.input:focus ~ .placeholder,
.input:not(:placeholder-shown) ~ .placeholder {
  transform: translateY(-30px) translateX(10px) scale(0.75);
}

.input:not(:placeholder-shown) ~ .placeholder {
  color: #808097;
}

.input:focus ~ .placeholder {
  color: #dc2f55;
}

.submit {
  background-color: #08d;
  border-radius: 12px;
  border: 0;
  box-sizing: border-box;
  color: #eee;
  cursor: pointer;
  font-size: 18px;
  height: 50px;
  margin-top: 38px;
  // outline: 0;
  text-align: center;
  width: 100%;
}

.submit:active {
  background-color: #06b;
}

div#social-links {
    margin: 0 auto;
    max-width: 500px;
}

div#social-links ul li {
    display: inline-block;
}

div#social-links ul li a {
    padding: 10px;
    border: .5px solid #9e1e1e;
    margin: 1px;
    font-size: 30px;
    color: #222;
    background-color: #7f2eb1;
}


    </style>
</head>

<body>
   
<form action="{{ route('your-details')}}" method="POST">
    @csrf
    <div class="form">
      @auth
        
    

      <h3> <center>{!! $shareComponent !!} </center></h3>

      @endauth

      @if($errors->any())
    <div class="alert alert-danger">
        <p><strong>Hey, there a few things to fix!</strong></p>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif


       <center> <div class="title">{{ $name}}</div></center>
        <div class="subtitle">We will like to have the following details from you:</div>

        <div class="input-container ic1">
     <input class="input" name="name" value="{{ old('name')}}" type="text" placeholder=" " />
          <div class="cut"></div>
          <label for="firstname" class="placeholder">Full Name</label>
        </div>


        <div class="input-container ic2">
          <input name="phone" value="{{ old('phone')}}"  class="input" type="text" placeholder=" " />
          <div class="cut"></div>
          <label for="lastname" class="placeholder">Phone Number</label>
        </div>


        <div class="input-container ic2">
          <input name="email" value="{{old('email')}}" class="input" type="email" placeholder=" " />
          <div class="cut cut-short"></div>
          <label for="email" class="placeholder">Email</>
        </div>


        <div class="input-container ic2">
            <input id="lastname" name="address" value="{{old('address')}}" class="input" type="text" placeholder=" " />
            <div class="cut"></div>
            <label for="lastname" class="placeholder">Address</label>
          </div>



          <div class="input-container ic2">
            <select name="gender" class="input" >
                <option>--Gender--</option>
                <option value="Female">Female</option>
                <option value="Male">Male</option>
            </select>
          </div>


          <div class="input-container ic2">
            <input name="DOB" class="input" type="Date" placeholder=" " />
            <div class="cut"></div>
            <label for="lastname" class="placeholder">Date Of Birth</label>
          </div>



          <div class="input-container ic2">
            <input  name="Spouse_DOB" class="input" type="Date" placeholder=" " />
            <div class="cut"></div>
            <label for="lastname" class="placeholder"> <span style="color:red;"> Spouse </span> Date Of Birth</label>
          </div>


          <div class="input-container ic2">
            <input name="prof" value="{{ old('prof')}}"  class="input" type="text" placeholder=" " />
            <div class="cut"></div>
            <label for="lastname" class="placeholder">Profession</label>
          </div>


       
            <input name="id" value="{{ $id }}" type="hidden" placeholder=" " />
          
        <button type="submit" class="submit">submit</button>
      </div>

</form>
</body>
  
</html>