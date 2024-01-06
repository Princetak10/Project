function changeDiv() {
    var selectElement = document.getElementById('team');
    var selectedValue = selectElement.value;
    var div1 = document.getElementById('Birthday Parties');
    var div2 = document.getElementById('Family Reunion');
    var div3 = document.getElementById('House Opening');
    var div4 = document.getElementById('Anniversary Parties');
    var div5 = document.getElementById('Baby Shower');
  
    // Hide all divs
    div1.style.display = 'none';
    div2.style.display = 'none';
    div3.style.display = 'none';
    div4.style.display = 'none';
    // div4.style.display = 'none';
    div5.style.display = 'none';
   
  
    // Show the selected div
    if (selectedValue === 'Birthday Parties') {
      div1.style.display = 'block';
    } else if (selectedValue === 'Family Reunion') {
      div2.style.display = 'block';
    } else if (selectedValue === 'House Opening') {
      div3.style.display = 'block';
    } else if (selectedValue === 'Anniversary Parties') {
      div4.style.display = 'block';
    } else if (selectedValue === 'Baby Shower') {
      div5.style.display = 'block';
    }
  }
  