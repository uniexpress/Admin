$(document).ready(function(){
  get_data();
});


function get_data(){
  fetch("https://pokemon-go1.p.rapidapi.com/pokemon_stats.json")
  .then(response=>response.json())
  .then(data=>{
    console.log(data);
  })
}