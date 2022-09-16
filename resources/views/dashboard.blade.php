@extends('base')

@section('content')

    <div class="loader">
        <div class="name">
            <h1>WELCOME</h1>
        </div>
        <span style="--i: 1"></span>
        <span style="--i: 2"></span>
        <span style="--i: 3"></span>
        <span style="--i: 4"></span>
        <span style="--i: 5"></span>
        <span style="--i: 6"></span>
        <span style="--i: 7"></span>
        <span style="--i: 8"></span>
        <span style="--i: 9"></span>
        <span style="--i: 10"></span>
    </div>
    

<style>

.loader {
  position: relative;
  width: 250px;
  height: 300px;
  left: 85vh;
  top: 100px;

}
.name {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  font-size: 20px;
  background: #cfc31d;
  background: -webkit-linear-gradient(
    to right,
    #cfc31d 0%,
    #a1d9ff 50%,
    #cf97c8 100%
  );
  background: -moz-linear-gradient(
    to right,
    #cfc31d 0%,
    #a1d9ff 50%,
    #cf97c8 100%
  );
  background: linear-gradient(to right, #cfc31d 0%, #a1d9ff 50%, #cf97c8 100%);
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-family: sans-serif;
}

.loader span {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transform: rotate(calc(36deg * var(--i)));
  cursor: pointer;
}
.loader span::before {
  content: "";
  position: absolute;
  box-sizing: border-box;
  top: 0;
  left: 0;
  width: 25px;
  height: 25px;
  background-color: rgba(0, 0, 0, 0.363);
  border: 4px solid #00efff;
  border-radius: 25%;
  box-shadow: 0 0 20px #00efff, -30px -30px 0 #00efff, -30px -30px 20px #00eeff,
    30px 30px 0 #00efff, 30px 30px 20px #00efff, -30px 30px 0 #00efff,
    -30px 30px 20px #00efff;
  animation: animate 5s linear infinite;
  animation-delay: calc(-0.12s * var(--i));
  transform-origin: 2px;
  transition: 1.5s;
}

.loader:hover span::before {
  transform-origin: 250px;
  box-shadow: 0 0 20px #00efff, -100px -200px 0 #00efff,
    -500px -200px 20px #00efff, 800px 200px 0 #00efff, 600px 200px 20px #00efff,
    700px -200px 0 #00efff, 100px -200px 20px #00efff, -300px 200px 0 #00efff,
    -900px 200px 20px #00efff;
}
.loader:active span::before {
  transform-origin: 250px;
  box-shadow: 0 0 20px #00efff, -100px -200px 0 #00efff,
    -500px -200px 20px #00efff, 800px 200px 0 #00efff, 600px 200px 20px #00efff,
    700px -200px 0 #00efff, 100px -200px 20px #00efff, -300px 200px 0 #00efff,
    -900px 200px 20px #00efff;
}

@keyframes animate {
  0% {
    transform: rotate(0deg);
    filter: hue-rotate(0deg);
  }
  100% {
    filter: hue-rotate(720deg);
    transform: rotate(360deg);
  }
}

</style>
@endsection
