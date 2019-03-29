<template>
    <div id="app">
        <div id="infomation">
            <div id="current-weather">
                <current-weather />
            </div>
            
            <hr>

            <div id="forecast">
                <forecast />
            </div>

        </div>
        <div id="map">
            <google-map />
            
        </div>
    </div>
</template>

<script>
import HelloWorld from './components/HelloWorld'

export default {
  name: 'App',
  components: {
    HelloWorld
  }
}
</script>

<style>
    body {
        background-color: #fafafa;
    }
    #app {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 1000px;
        height: 600px;
        margin-top: -300px;
        margin-left: -500px;
        border-radius: 3px;
        background-color: #444;
        box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.1);
    }
    #app:after {
        content: '';
        display: block;
        clear: both;
    }
    #app > #infomation {
        float: left;
        width: 600px;
    }
    #app > #infomation > #current-weather {
        margin-top: 100px;
    }
    #app > #infomation > #forecast {
        padding-top: 10px;
        height: 233px;
    }
    #app > #map {
        float: right;
        width: 400px;
        height: 600px;
    }    
    hr {
        width: 80%;
        margin: 40px auto;
        border: none;
        border-top: 1px solid white;
    }
</style>
