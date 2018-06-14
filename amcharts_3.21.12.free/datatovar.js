fetch('..\Scripts\Datos.json')
  .then(response => response.text())
  .then(jsonResponse => console.log(jsonResponse))     
   // outputs a javascript object from the parsed json