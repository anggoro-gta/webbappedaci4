const url = window.location.origin;
// google maps setup
let map = new google.maps.Map(document.getElementById('map_google'),{
  center : {lat:-7.809585,lng:112.042826},
  zoom :15
})

// marker posotion
const markers = [
  {lat:-7.809585, lng:112.042826, info: 'Arah: <br> <a href="https://www.google.com/maps/dir//-7.8095878,112.0427931/@-7.8094402,112.0426782,19.97z/data=!4m2!4m1!3e2?entry=ttu" target="_blank">klik di sini</a>'} 
]

markers.forEach(m =>{
  const marker = new google.maps.Marker({
    position: {lat:m.lat, lng:m.lng},
    icon: url+"/assets/bahan/img/marker_bappeda32x32.png",    
    draggable: false,
  });
  
  const popupcontent = new google.maps.InfoWindow()
  
  google.maps.event.addListener(marker, 'click', (function(marker){
    return function(){
      popupcontent.setContent(m.info)
      popupcontent.open(map, marker)
    }
  })(marker)
  )
  
  marker.setMap(map);
})

// google marker
// const marker = new google.maps.Marker({
//   position :{lat:-7.809585,lng:112.042826},
//   title: "test mark",
//   draggable: false,
// });

// const popupcontent = new google.maps.InfoWindow()

// google.maps.event.addListener(marker, 'click', (function(marker){
//   return function(){
//     popupcontent.setContent("this coba")
//     popupcontent.open(map, marker)
//   }
// })(marker)
// )

// marker.setMap(map);

// icon: "../../assets/marker_bappeda32x32.png",