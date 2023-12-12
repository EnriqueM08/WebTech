function getDataFromForm()
{
    data = document.getElementsByTagName('input');
    runAjax(data[0].value, data[1].value);
}

function runAjax(fname, lname)
{
    var xhr = new XMLHttpRequest;
    xhr.open('GET', './ajax.php?fname=' + fname +"&lname=" + lname, true);
    xhr.send();
    xhr.onload = function() {
        if(xhr.status === 200 && typeof xhr.responseText === 'string') {
            document.getElementById('responseString').innerHTML = xhr.responseText;
        }
    }
}
