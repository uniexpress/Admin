/* POST */
  fetch("url",{
    method: 'POST',
    headers:{'Content-Type': 'application/json'},
    body:JSON.stringify({
      data1:"data1",
      data2:"data2",
      data3:"data3"
    })
  })
  .then(response=>response.json())
 .then(data=>{
   console.log(data);
 })
  

  /*  GET */
 fetch("url")
 .then(response=>response.json())
 .then(data=>{
   console.log(data);
 })
 

/*DELETE */
fetch("url",{
  method: 'DELETE',
})
.then(response=>response.json())
.then(data=>{
 console.log(data);
})





