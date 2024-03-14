function get(url) {
  console.log('get - ' + url);

  let xhr = new XMLHttpRequest();
  xhr.open("GET", url);
  xhr.withCredentials = true;
  xhr.send();
  xhr.onload = () => console.log(xhr.responseText);
}

