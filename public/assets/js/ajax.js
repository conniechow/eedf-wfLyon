console.log('loaded ajax.js');

function getXMLHttpRequest(){
  var xhr = null; // on défini notre variable xhr
  if( window.XMLHttpRequest || window.ActiveXObject){
    //si XMLHttpRequest ou ActiveXObject est dispo
    if (window.ActiveXObject ){
      try { // on tente d'instancier ActiveXObject
        xhr = new ActiveXObject('Msxml2.XMLHTTP');
      } catch(e){ // si sa n'a pas fonctionné
        xhr = new ActiveXObject('Microsoft.XMLHTTP');
      }
    } else {
      xhr = new XMLHttpRequest();
    }
  } else {
    console.log("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
    return null;
  }
  return xhr;
}

function request(_url){
  var xhr = getXMLHttpRequest();
  xhr.onreadystatechange = function(){
    console.log(xhr);
    if(xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0 )){
      //console.log("xhr ready");
      var response = JSON.parse(xhr.responseText);
      console.log(response);
      fillOutput(response)
    } else {
      console.log(xhr);
    }
  }
  xhr.open('GET',_url, true);
  xhr.send(null);
}

function formRequest(event){
  event.preventDefault();
  var xhr = getXMLHttpRequest();
  var prenom = document.getElementById('prenom').value;
  var nom = document.getElementById('nom').value;
  xhr.onreadystatechange = function(){
    console.log(xhr.readyState);
    if(xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0) ){
      console.log("XHR Response:"+xhr.responseText);
      document.getElementById('output').innerHTML = xhr.responseText;
    }
  }

  xhr.open('GET', 'traitement.php?form=true&prenom='+prenom+'&nom='+nom, true);
  xhr.send(null);
}

function fillOutput(_data){
  output = document.getElementById('output');
  for(var k in _data){
    //console.log(Object.keys(_data[k]));
    fillRow(_data[k]);
    output.appendChild(fillRow(_data[k]));
  }
}

function fillRow(_row){
  var tr=document.createElement('tr');
  for(var e in _row){
    if(e != "id"){
      var td = document.createElement('td');
      td.innerHTML = _row[e];
      tr.appendChild(td);
    }
  }
   return tr;
}


getXMLHttpRequest();
