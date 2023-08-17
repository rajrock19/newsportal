<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap');

$accent-color: #3C3718;
$secondary-color: #E6F7D1;
$main-color: #84d337;

body {
  background: $secondary-color;
  margin: 0;
}

* {
  font-family: 'Julius Sans One', sans-serif;
  letter-spacing: 3px;
}

div {
  display: flex;
  justify-content: center;
}

form {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: start;
  background: $main-color;
  margin: 20px 50px;
  padding: 30px;
  width: 320px;
  height: 380px;
  box-shadow: 0px 5px 15px 2px $main-color;
}

h1 {
  color: $accent-color;
  margin: 30px 0 50px 0;
}

@mixin default-view {
  padding: 0 15px;
  width: -webkit-fill-available;
  margin: 15px;
  height: 35px;
  border-radius: 20px;
  font-weight: bold;
}

input {
  @include default-view;
  background: $secondary-color;
  border: 2px solid $secondary-color;
  outline: none;
  color: $accent-color;
  transition: all 500ms ease-out;
  
  &:focus {
    border: 2px solid $accent-color;
  }
}

button {
  @include default-view;
  background: $accent-color;
  margin: 40px 15px 20px 15px;
  color: $secondary-color;
  transition: all 500ms ease-out;
  animation: lights 4000ms infinite ease-in;
  border: 0;
  
  &:hover {
    border: 1px solid $secondary-color;
    box-shadow: 0px 0px 10px 2px $secondary-color;
    animation: none;
  }
}

@keyframes lights {
  0% {
    box-shadow: 0px 0px 5px 2px $secondary-color;
  } 
  50% {
    box-shadow: 0px 0px 5px 2px $accent-color;
  }
  70% {
    box-shadow: 0px 0px 5px 2px #64896A;
  }
  100% {
    box-shadow: 0px 0px 5px 2px $secondary-color;
  }
}

a {
  color: $secondary-color;
  text-decoration: none;
  font-size: 10px;
  font-weight: bolder;
  opacity: 0.6;
  transition: all 300ms ease-in-out;
  
  &:hover {
    opacity: 0.9;
  }
}
    </style>
</head>
<body>
    <div>
        <form>
          <h1>Log in</h1>
          <input type="email" placeholder="Username"/>
          <input type="password" placeholder="Password"/>
          <button type="submit">Next</button>
          <a href="#">Forgot your password?</a>
        </form>
      </div>
</body>
</html>