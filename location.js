// Generated by CoffeeScript 1.6.3
(function(){var e,t,n,r;t=google.maps.Map;e=google.maps.LatLng;n=google.maps.Marker;r=function(){var r,i;r=$("#map")[0];i=new t(r,{center:new e(48.72013,-122.49853),zoom:15});return new n({position:new e(48.71908,-122.50886),map:i,title:"the Cirquelab"})};google.maps.event.addDomListener(window,"load",r)}).call(this);