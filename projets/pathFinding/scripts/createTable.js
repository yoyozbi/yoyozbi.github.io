var container = document.getElementById('container');
var table = document.createElement('table');
table.id = 'table'
container.appendChild(table);
for(var i = 0;i <30;i++)
{
    var tr = document.createElement('tr');
    tr.id = i;
    for(var g = 0;g<75;g++)
    {
        var td = document.createElement('td');
        if(i == 13 && g == 13)
        {
            td.className = 'start';
        }else if(i == 13 && g == 70)
        {
            td.className = "target";
        }else
        {
            td.className = "unvisited"
        }
        td.id = i + '-' + g;
        tr.appendChild(td);
    }
    table.appendChild(tr);
}