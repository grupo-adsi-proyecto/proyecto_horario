

      
      var opciones = {
  //solución, material y tiempo
  "0": ["", ""],
  "1": ['01-01-2020', '31-03-2020'],
  "2": ["01-04-2020", "30-06-2020"],
  "3": ["01-07-2020", "30-09-2020"],
  "4": ["01-10-2020", "31-12-2020"],
  "5": ["01-01-2021", "31-03-2021"],
  "6": ["01-03-2021", "30-06-2021"]
}

function cambioOpciones()

{
  var combo = document.getElementById('opciones');
  var opcion = combo.value;
  
 
  document.getElementById('fechai').value = opciones[opcion][0];

  document.getElementById('fechaf').value = opciones[opcion][1];

  

}



