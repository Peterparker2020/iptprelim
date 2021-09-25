
@extends('base')

@section('content')

<style>
    body, html {
  height: 100%;
}

* {
}



.bg-text {
 
  color: white;
  font-weight: bold;
  
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
  font-family:monospace;
}
</style>

<div class="bg-text">
    <h1>HYPE BEAST</h1>
    <h2>Anti Social Club</h2>
    <p>Click here to <a class="text-white" href="/register">register!</a></p>
  </div>