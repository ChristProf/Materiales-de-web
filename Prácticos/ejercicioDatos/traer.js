function traer() {
    fetch('datos.json')
  .then(response => response.json())
  .then(datos => {
    console.table(datos);
  })
  .catch(error => {
    console.error('Error al cargar el archivo:', error);
  });
    
}

function construirTabla(selector, datos) {
    document.getElementById("tabla").innerHTML="";
    var cols = Cabezales(datos, selector);

    for (var i = 0; i < datos.length; i++) {
        var row = $('<tr/>');
        for (var colIndex = 0; colIndex < cols.length; colIndex++) {
            var val = datos[i][cols[colIndex]];

            
            if (val == null) val = "";
            row.append($('<td/>').html(val));
        }

        $(selector).append(row);
    }
}

function Cabezales(datos, selector) {

    var columns = [];
    var header = $('<tr/>');

    for (var i = 0; i < datos.length; i++) {
        var row = datos[i];

        for (var k in row) {
            if ($.inArray(k, columns) == -1) {
                columns.push(k);

                header.append($('<th/>').html(k));
            }
        }
    }

    $(selector).append(header);
    return columns;
}


traer();
  